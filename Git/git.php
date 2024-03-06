ssh-keygen -t ed25519 -C "email"
Host abc github.com
   HostName github.com
   PreferredAuthentications publickey
   IdentityFile ~/.ssh/id_ed25519_abc
===========================================================================================================================================================
Extra video 
https://www.youtube.com/watch?v=2ZTkyr9K0-I
===========================================================================================================================================================
Main key generate video 
https://www.youtube.com/watch?v=vSeYsk4WYvg
===========================================================================================================================================================
ed25519: A public key signature is a type of digital signature that uses a pair of keys – a public key and a private key – to authenticate the sender of a message.
===========================================================================================================================================================

user: 01764305080, pass: asad5080mjk 
user: mdasadask, pass: Git-asad5080mjK

ssh-keygen -t ed25519 -C "mdasadask@gmail.com"
ssh-keygen -t ed25519 -C "mdasad_ask@yahoo.com"

*** ssh-keygen -t ed25519 -C "mdasadask@gmail.com" , ei command deyar por " (C:\Users\Md. Asad Sheikh\.ssh/id_ed25519) " ei link copy kore alias name " C:\Users\Md. Asad Sheikh\.ssh/id_ed25519_01764305080 " eita korbo

Enter passphrase (empty for no passphrase): 1234 (For both mdasadask & 01764305080)

*** public key copy kore github er SSH keys te add korbo. 

-----------------------------------------------------------------------------------------------
config file(In C:\Users\Md. Asad Sheikh\.ssh folder and file name only config(no extension))

Host mdasadask github.com
   HostName github.com
   PreferredAuthentications publickey
   IdentityFile ~/.ssh/id_ed25519_mdasadask
   
Host 01764305080 github.com
   HostName github.com
   PreferredAuthentications publickey
   IdentityFile ~/.ssh/id_ed25519_01764305080

-----------------------------------------------------------------------------------------------
copy clone command from ssh 
git clone git@mdasadask:mdasadask/testask.git
===========================================================================================================================================================


## vim new.txt (vim editor open hobe. jokhon niche insert lekha .thake tokhon lekha jay. i enter korle insert ase.
lekha ses hole esc dile niche abar command deya jay. :x/:wq command likhe enter
dile save o exit hoy.)

## ls (show file)
## ls -al (show all file hidden)
## git show abcdef
## git checkout abcdef
## git checkout master
## git checkout master -f
## git remote add origin link (origin remote)
## git remote show
## git remote show origin
## git push origin master
## git pull origin master
## touch asad.php
## git config --global user.name "Asad80"
## git config --global user.email "mdasad_ask@yahoo.com"
## git config credential.username "Asad80"
## git config --global -e
## git config --list / git config -l

## git restore fileName
## git rm --cached fileName (unstage file)
## rm -r --cached folderName (unstage folder) [-r = recursive(পুনরাবৃত্তি)]
## git diff
## git log
## git log --oneline (show git commit details)
## git log --oneline --graph
## git reset --hard HEAD^
## git reset --hard e88a23d (e88a23d eita hobe new head)
## git remote -v
## git remote add upstream https://github.com/mistersakil/task-management-ihelp.git
## git fetch upstream
## git merge upstream/main ( checkout je branch thake tar sathe merge hoy )
## git checkout -b asad

===========================================================================================================================================================
New learned git command

## ### Ekbar commit korar por command gulo kaj kore ###
   git add -A/--all sob file stage tule dey.
   R git add . sudhu je folder ace sei folder er sob stage tule dey.
   git add * deleted file gulo chara baki gulo stage tule dey.
## (cd ../ == cd..) dile ek step back a chole jay.
## HEAD^ (^ = caret(ক্যারেট)/exponent)
   git reset --soft HEAD^ >> current commit remove hoye, tar ager commit current commit hoy. Ebong current commit stagging area te chole jay
   git reset --hard HEAD^ >> current commit remove hoye, tar ager commit current commit hoy. Ebong current commit R paouya jay na.
   git reset HEAD^ >> current commit remove hoye, tar ager commit current commit hoy. Ebong current commit working area te chole jay

   git reset dile reset hobe
   git reset --hard dile deleted file gulo soho chole ase.


## git merge --abort (Merge obosthay thakle merge bad hoye jay)
## git stash (Commit er porer sob stagging & working theke chole jay)
## git reset --hard e88a23d
## git reset --hard HEAD~2 (head duita commit niche asbe )