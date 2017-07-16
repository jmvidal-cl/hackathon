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

SQL="select id, telefono_celular, apellido_paterno, rut 
     from Cliente 
     where flag = 0"

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

    $EXEC $PARAM "add_contact $NUMERO $APELLIDO_PATERNO $RUT"

    SQL="update Cliente set flag=1 where id=$ID" 
    mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWD $DB_NAME --execute "$SQL" 

    fi
done < "$REGISTROS"

#$EXEC $PARAM "contact_list"

