# Backup
#docker exec bb-db /usr/bin/mysqldump -u root --password=azzam boxbilling > 02.sql

# Restore
cat 01.sql | docker exec -i bb-db /usr/bin/mysql -u root --password=azzam boxbilling