#!/bin/bash

#********************
# jmvidal
# 20170715
#*****************************************

source config.cfg

#export TELEGRAM_CONFIG_DIR=/home/pi/.telegram-cli
#PARAM=" -vvv -W /etc/telegram/tg-server.pub -k /etc/telegram/server.pub -U root -c /etc/telegram-cli/telegram-cli/config  -e "
PARAM=" -W -e "
#PARAM=" -vvv -W tg.pub -k /home/pi/tg/server.pub -U root -c /etc/telegram-cli/telegram-cli/config  -e "
#PARAM=" -vvv -k /home/pi/tg/server.pub -U root -W -e "

REGISTROS="movimientos.csv"
MENSAJE="mensajes.csv"

SQL="select a.id, b.telefono_celular, b.apellido_paterno, a.rut, b.email
     from TB_workflow as a 
     inner join Cliente as b on a.rut = b.rut
     inner join TB_config as c on a.id_proceso = c.id_proceso
     where a.flag_msg_actual = 0 and c.activo = 1
     order by a.rut, a.id_proceso"

mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWD $DB_NAME --execute "$SQL" > $REGISTROS

CONT=0
while read -r registro
do
    CONT=$((CONT+1))

    if [ $CONT -gt 1 ] 
    then

    ID=$(echo $registro | awk '{print $1}')
    NUMERO=$(echo $registro | awk '{print $2}')
    APELLIDO_PATERNO=$(echo $registro | awk '{print $3}')
    RUT=$(echo $registro | awk '{print $4}')
    MAIL=$(echo $registro | awk '{print $5}')

    SQL="select c.descripcion
         from TB_workflow as a 
         inner join TB_config as b on a.id_proceso = b.id_proceso
         inner join TB_mensajes as c on b.codigo_mensaje = c.codigo_mensaje
         where a.id = $ID
         order by a.rut, a.id_proceso"

    echo "1 -> $SQL"    

    mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWD $DB_NAME --execute "$SQL" > $MENSAJE
    SALUDO="Haz finalizado "$(tail -n 1 $MENSAJE)

#    echo $SALUDO
 
#    echo "$ID => $NUMERO => $APELLIDO_PATERNO => $RUT => $MAIL => $SALUDO"

    $EXEC $PARAM "add_contact $NUMERO $APELLIDO_PATERNO $RUT"

#    sleep 10

    $EXEC $PARAM "msg "$APELLIDO_PATERNO"_"$RUT" $SALUDO"

    SQL="update Cliente set flag=1 where rut='$RUT'" 
    mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWD $DB_NAME --execute "$SQL" 

    SQL="update TB_workflow set flag_msg_actual = 1 where id=$ID" 
    mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWD $DB_NAME --execute "$SQL" 

    # ENVIO DE CORREO
    tail -n 1 $MENSAJE > mensaje.txt
    mutt -s "Bienvenido " $MAIL < mensaje.txt

    SQL="select b.pro_sig
         from TB_workflow as a 
         inner join TB_config as b on a.id_proceso = b.id_proceso
         where a.id = $ID"

    echo "2 -> $SQL"    

    mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWD $DB_NAME --execute "$SQL" > $MENSAJE
    ID_SIGUIENTE=$(tail -n 1 $MENSAJE)

    echo $ID_SIGUIENTE

    SQL="select b.descripcion
         from TB_config as a
         inner join TB_mensajes as b on a.codigo_mensaje = b.codigo_mensaje
         where a.id_proceso = '$ID_SIGUIENTE'"

    echo "3 -> $SQL"    

    mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWD $DB_NAME --execute "$SQL" > $MENSAJE
    SALUDO="Ahora continuas con "$(tail -n 1 $MENSAJE)
    
#    echo $SALUDO

    SQL="update TB_workflow set flag_pro_sig = 1 where id=$ID" 
    mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWD $DB_NAME --execute "$SQL" 

    sleep 10

    $EXEC $PARAM "msg "$APELLIDO_PATERNO"_"$RUT" $SALUDO"

    # ENVIO DE CORREO
    tail -n 1 $MENSAJE > mensaje.txt
    mutt -s "Bienvenido " $MAIL < mensaje.txt

    sleep 10

    fi
done < "$REGISTROS"

#$EXEC $PARAM "contact_list"

