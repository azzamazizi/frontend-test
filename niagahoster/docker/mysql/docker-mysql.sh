# Backup
# docker exec db_frontend /usr/bin/mysqldump -u root --password=azzam niagahoster > 02.sql

# Restore
cat 02.sql | docker exec -i db_frontend /usr/bin/mysql -u root --password=azzam niagahoster
