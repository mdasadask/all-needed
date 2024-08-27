1. Copy Folder: From :/srv/www/htdocs
    cp -r ihelpbd_social_demo ihelpbd_dev2
2. rm -rf ihelpbd_social_1
3. vi /etc/asterisk/extensions.conf

================== PREVIOUS ==================

Berkeley Software Distribution (BSD)
Telnet Internet protocol
cd /srv/www/htdocs/wallboard

Orbit:~ # /usr/bin/php /srv/www/htdocs/wallboard/drop_sms.php 
Orbit:~ # crontab -e

Orbit:~ # screen -L -S asterisk
Orbit:~ # cd /var/log/astguiclient
Orbit:~ # sip show peers
Orbit:~ # ulimit -n 65536
Orbit:~ # tail -F /var/log/apache2/error_log
Orbit:~ # tail -F /var/log/apache2/error_log


Orbit:~ # service mysql restart 



cron =====  10ms:~ # /usr/bin/php /srv/www/htdocs/api/10ms/inbound.php
cron =====  10ms:~ # /usr/bin/php /srv/www/htdocs/api/10ms/outbound.php

## root on/off == vi /etc/ssh/sshd_config, then(PermitRootLogin yes/no), service sshd restart


============================================== Start: Copy ===========================================
cd /srv/www/htdocs
scp -r iticket-poison* root@103.20.52.30:/srv/www/htdocs
scp -r icrm-poison-popup root@103.20.52.30:/srv/www/htdocs
scp -r /etc/apache2/ihelpbd.com/* root@103.106.118.162:/etc/apache2/ihelpbd.com/ ##From terminal, may be kiron vai
scp -r ihelpbd_social_cholojai ihelpbd_social_gdic ihelpbd_social_review ihelpbd_social ihelpbd_social_alzakir root@103.106.118.162:/srv/www/htdocs/ ## kiron vai

First: Go to dir from where >>>
scp -r ihelp_social root@103.106.118.162:/srv/www/htdocs ##I am test - ok
scp -r -P 22 ihelp_social root@103.106.118.162:/srv/www/htdocs ##Sobuj vai - I am also check (ok) 
============================================== End: Copy ==============================================


============================================== Start: Error Check ===========================================
tail -F /var/log/apache2/error_log
============================================== End: Error Check ==============================================

============================================== Start: Cron ===========================================
*/1 * * * * /usr/bin/php /srv/www/htdocs/ihelpbd_ssg/layouts/webhook-assign.php

---------------------------------------------------
grep -rnw '/home/' -e "process_facebook_webhook_data.php
sh /home/webhook_assign3.sh
vi /home/webhook_assign3.sh
---------------------------------------------------
ctrl + x (If create any the want to know save or not. If y then save. reboot )
============================================== End: Cron ==============================================

============================================== Start: Server Down ===========================================
service apache2 stop
service apache2 start
============================================== End: Server Down ==============================================

============================================== Start: Run php code before cron run ===========================================
sh /home/webhook_assign.sh
============================================== End: Run php code before cron run ==============================================

============================================== Start: curl check ===========================================
curl https://omni.ihelpbd.com/upload-image2.php
============================================== End: curl check ==============================================


