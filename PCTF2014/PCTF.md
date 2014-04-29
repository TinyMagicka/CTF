# PCTF 2014

[官方网站] [PCTF]

[PCTF]:http://play.plaidctf.com/

## Hints

### tiffany hint

(for tiffany)

Each instance does a very simple thing.

### mtpox hint

(for mtpox)

Try reading things using ?page=

### ezhp hint

(for ezhp)

The heap allocator is *really, really bad.*

### Bronies Clarification #1

(for bronies)

Just to clarify, both flags for bronies are behind the login page - the pony site doesn't have any flags in it

## Sanity check

### Misc (1 pts)

The key is poop

## mtpox

### Web (150 pts)

The Plague has traveled back in time to create a cryptocurrency before Satoshi does in an attempt to quickly gain the resources required for his empire. As you step out of your time machine, you learn [his exchange] [mtpox] has stopped trades, due to some sort of bug. However, if you could break into the database and show a different story of where the coins went, we might be able to stop The Plague.

[mtpox]:http://54.211.6.40/

## wheeeee

### Crypto (375 pts)

Although it seems like The Plague's messaging service is secure, there are bound to be bugs in any 20th century crypto system. We've recovered [a version] [wheeeee] of the block cipher The Plague implemented. Use their online encryptor tool, at 54.82.75.29:8193, to break the cipher and figure out Plague's secret plans. NOTE: When the service sends you a hex-encoded string, respond with a hex-encoded string.

[wheeeee]:http://play.plaidctf.com/files/wheeeee-8aa05f8827f5ece6a27c021eae46d118.tar.bz2

本地下载：[wheee] [wheeeeelocal]

[wheeeeelocal]:/attach/wheeeee-8aa05f8827f5ece6a27c021eae46d118.tar.bz2

## twenty

### Crypto (20 pts)

It's so far in the past, computers haven't even been imagined, let alone used. But somehow The Plague has already been here, building an evil army of hackers. Can you find his [secret message] [twenty]?

[twenty]:http://play.plaidctf.com/files/twenty-c870a2814484278ecd90c21f35cd45ae.tar.bz2

本地下载：[twenty] [twentylocal]

[twentylocal]:/attach/twenty-c870a2814484278ecd90c21f35cd45ae.tar.bz2

## Heartbleed

### Misc (10 pts)

Back up now! Hopefully for good.

Our hearts are bleeding. But instead of bleeding password bytes, they're bleeding flags. Please recover our flags so we don't bleed to death before we can update to 1.0.1-g. Site is up at [https://54.82.147.138:45373] [heartbleed] 

[heartbleed]:https://54.82.147.138:45373

(The flag format is "flag{...}".)

## multiplication is hard

### Misc (10 pts)

The Plague went back in time... but we haven't yet figured out what he did this time... Anyway, what is 38.55 * 1700?

## doge_stege

### Forensics (100 pts)

You were startled to learn the The Plague has been behind many of the most popular internet memes. We believe he hides information in these funny pictures with steganography in order to broadcast his messages through time without detection. Find the [hidden message] [doge_stege], stop the signal.

[doge_stege]:http://play.plaidctf.com/files/doge_stege-bcea78ed7ce3588f89b56f125866c1e2.tar.bz2

本地下载：[doge_stege] [doge_stegelocal]

[doge_stegelocal]:/attach/doge_stege-bcea78ed7ce3588f89b56f125866c1e2.tar.bz2

## g++

### Reversing (200 pts)

Although it seems like The Plague's projects are open source, it's not quite so simple to figure out what the source code does. We believe [this project] [g++] is supposed to print out secret information, but the KEY variable in the Makefile has been lost. Find the key, build the project, get us the information.

[g++]:http://play.plaidctf.com/files/g++-30f6a74ce24ea3605ba7cbec92222a72.tar.bz2

本地下载：[g++] [g++local]

[g++local]:/attach/g++-30f6a74ce24ea3605ba7cbec92222a72.tar.bz2

## WhatsCat

### Web (300 pts)

The Plague is using his tremendous talent for web applications to build social websites that will get bought out for billions of dollars. If you can stop his climb to power now by showing how insecure [this site really is] [web300], (on IPv6 at 2001:470:8:f7d::1) maybe we will be able to stop his future reign of terror. [Here's] [whatscat] some of his source.

[web300]:http://54.196.116.77/
[whatscat]:http://play.plaidctf.com/files/whatscat-59b6f6c9b192457fa3e7d2253c8b24c9.tar.bz2

本地下载：[whatscat] [whatscatlocal]

[whatscatlocal]:/attach/whatscat-59b6f6c9b192457fa3e7d2253c8b24c9.tar.bz2

## rendezvous

### Misc (250 pts)

The Plague has a friend called Alice who has some secrets on [a tor service] [rendezvous]. We think if we can talk to her, we can learn some useful things about The Plague. Unfortunately she will only rendezvous with "chandler" when he brings a cookie with "beef" baked into it. Can you help us find her secret?

[rendezvous]:http://6c4dm56aer6xn2h2.onion/

## __nightmares__

### Pwnables (375 pts)

The Plague is building an army of evil hackers, and they are starting off by teaching them python with this simple service. Maybe if you could get full access to [this system] [__nightmares__], at 54.196.37.47:9990, you would be able to find out more about The Plague's evil plans.

[__nightmares__]:http://play.plaidctf.com/files/__nightmares__-0873934805b8f0c0c38eeae6db5fc1e8.tar.bz2

本地下载：[__nightmares__] [__nightmares__local]

[__nightmares__local]:/attach/__nightmares__-0873934805b8f0c0c38eeae6db5fc1e8.tar.bz2

## curlcore

### Forensics (250 pts)

We managed to grab [a memory dump] [curlcore] off of The Plague's computer while he was making a secure download. We think he may have been looking for new places to hide the Prime Factorizer. Can you figure out what messages were sent through his computer?

[curlcore]:http://play.plaidctf.com/files/curlcore-b9b2bc016a796db9db66be6365d48a6b.tar.bz2

本地下载：[curlcore] [curlcorelocal]

[curlcorelocal]:/attach/curlcore-b9b2bc016a796db9db66be6365d48a6b.tar.bz2

## ezhp

### Pwnables (200 pts)

Luckily when you travel back in time, you still get to use all your knowledge from the present. With that knowledge in hand, breaking into [this service] [ezhp] (at 54.81.149.239:9174) owned by The Plague shouldn't be hard at all.

[ezhp]:http://play.plaidctf.com/files/ezhp-b502addeb274f41757555c05b08e3b05.tar.bz2

本地下载：[ezhp] [ezhplocal]

[ezhplocal]:/attach/ezhp-b502addeb274f41757555c05b08e3b05.tar.bz2

## tiffany

### Reversing (300 pts)

We want to get access to a server used by The Plague. Maybe if you can find out what key is accepted by [this binary] [tiffany] you can find out where or when The Plague is...

[tiffany]:http://play.plaidctf.com/files/tiffany-0233a625fc40b2dda9c31781a0dbb46e.tar.bz2

本地下载：[tiffany] [tiffanylocal]

[tiffanylocal]:/attach/tiffany-0233a625fc40b2dda9c31781a0dbb46e.tar.bz2

## rsa

### Forensics (450 pts)

Our archaeologists recovered a dusty and corrupted old hard drive used by The Plague in his trips into the past. It contains a private key, but this has long since been lost to bitrot. Can you recover the full key from the [little information we have recovered] [rsa]?

[rsa]:http://play.plaidctf.com/files/rsa-6537e9aae493b0c43601d1dbc2da2ce2.tar.bz2

本地下载：[rsa] [rsalocal]

[rsalocal]:/attach/rsa-6537e9aae493b0c43601d1dbc2da2ce2.tar.bz2

## halphow2js

### Web (200 pts)

Javascript is everywhere. But there is [one strange javascript blob] [halphow2js] we have been seeing pop up on servers throughout the ages. We're pretty sure The Plague must be involved. Note: we know the cert displays a warning - that isn't important.

[halphow2js]:https://54.196.246.17:8001/

## graphs

### Crypto (200 pts)

In this era, block ciphers hadn't even been invented. The Plague created [this system] [graphs] based on problems he knew to be NP hard, but there must be something you can do to decode his messages.

[graphs]:http://play.plaidctf.com/files/graphs-0011fa3a98e9d40d4a671807eb817ca0.tar.bz2

本地下载：[graphs] [graphslocal]

[graphslocal]:/attach/graphs-0011fa3a98e9d40d4a671807eb817ca0.tar.bz2

## reeekeeeeee

### Web (200 pts)

The Plague seems obsessed with internet memes, though we don't yet know why. Perhaps there is a clue to what he's up to on [this server] [reeekeeeeeehttp] (epilepsy warning). If only you could break in.... [Here] [reeekeeeeee] is some of the source.

[reeekeeeeeehttp]:http://54.82.251.203:8000/
[reeekeeeeee]:http://play.plaidctf.com/files/reekee-d45a5cec85c467ed9a21934b871a88d1.tar.bz2

本地下载：[reeekeeeeee] [reeekeeeeeelocal]

[reeekeeeeeelocal]:/attach/reekee-d45a5cec85c467ed9a21934b871a88d1.tar.bz2

## hudak

### Reversing (250 pts)

Can you reverse [this program] [hudak] and find out what The Plague was working on?

[hudak]:http://play.plaidctf.com/files/hudak-c3c6dd04f699cc01c0d4f547f2155ddf.tar.bz2

本地下载：[hudak] [hudaklocal]

[hudaklocal]:/attach/hudak-c3c6dd04f699cc01c0d4f547f2155ddf.tar.bz2

## kpop

### Web (200 pts)

Sometimes, the Plague leaves some of his old stuff up and running. We found a [K-Pop lyrics website] [kpophttp] the Plague wrote back when he was learning to program. It was [open-source] [kpop], too! We believe there might be something important in /home/flag/flag. Could you get it for us?

[kpophttp]:http://54.234.123.205/
[kpop]:http://play.plaidctf.com/files/kpop-686da11b170e7054ebee30a218d6490f.tar.bz2

本地下载：[kpop] [kpoplocal]

[kpoplocal]:/attach/kpop-686da11b170e7054ebee30a218d6490f.tar.bz2

## zfs

### Forensics (400 pts)

The Plague is using state of the art systems for storing his data. Our operatives managed to steal [a drive] [zfs] from one of his servers, but it seems like our haste may have led to some uber-corruption. Can you get the data off the drive to track down The Plague?

[zfs]:http://play.plaidctf.com/files/zfs-ff06f37193caa92456e9c03090c80600.tar.bz2

本地下载：[zfs] [zfslocal]

[zfslocal]:/attach/zfs-ff06f37193caa92456e9c03090c80600.tar.bz2

## tenement

### Pwnables (100 pts)

The Plague has tried to make things easy for you in [this service] [tenement], but not too easy. He's called The Plague, not The Nice Guy. The service should be running at [54.237.240.143:9999] [tenementhttp].

[tenement]:http://play.plaidctf.com/files/tenement-38db26ad2799801263a066a831526836.tar.bz2
[tenementhttp]:54.237.240.143:9999

本地下载：[tenement] [tenementlocal]

[tenementlocal]:/attach/tenement-38db26ad2799801263a066a831526836.tar.bz2

## paris

### Reversing (300 pts)

[This binary] [paris] was found on some of our Windows machines. It's got The Plague written all over it. What secrets are contained inside?

[paris]:http://play.plaidctf.com/files/paris-20b542bf824d8d0daf240bbf3febbce0.tar.bz2

本地下载：[paris] [parislocal]

[parislocal]:/attach/paris-20b542bf824d8d0daf240bbf3febbce0.tar.bz2

## kappa

### Pwnables (275 pts)

There's got to be a way to get into [this service] [kappa] set up by the Plague at [54.80.112.128:1313] [kappahttp]. Can you find it?

[kappa]:http://play.plaidctf.com/files/kappa-f2fdf7fcc074cb0c66c3d80a48286450.tar.bz2
[kappahttp]:54.80.112.128:1313

本地下载：[kappa] [kappalocal]

[kappalocal]:/attach/kappa-f2fdf7fcc074cb0c66c3d80a48286450.tar.bz2

## gcc

### Reversing (300 pts)

This is bad. Very bad. You travel back in time, only to see that The Plague has finagled his way to the gcc dev team. What sort of mischief he can cause for the future from this point of power is hard to say... find out what he's up to immediately! [Here's] [gcc] a copy of GCC. We're pretty sure he's running something at https://107.21.133.9/. 

UPDATE: Server is up. Thank you for your patience.

[gcc]:http://play.plaidctf.com/files/gcc-1f056eb86b487b65ad92d89738ec5edc.tar.gz

本地下载：[gcc] [gcclocal]

[gcclocal]:/attach/gcc-1f056eb86b487b65ad92d89738ec5edc.tar.gz

## harry_potter

### Pwnables (300 pts)

If only we could get into [this system] [harry_potter], running at 54.198.150.4:666, we might get an idea of where The Plague as been keeping the Prime Factorizer.

[harry_potter]:http://play.plaidctf.com/files/harry_potter-2e0391597fb1d20ebf79b7d77c21b06e.tar.bz2

本地下载：[harry_potter] [harry_potterlocal]

[harry_potterlocal]:/attach/harry_potter-2e0391597fb1d20ebf79b7d77c21b06e.tar.bz2

## Freya

### Misc (250 pts)

We've traveled back far, but this protocol looks familiar... Our reconnaissance team did a great job, they got us [a data capture from the currently running systems and a private key] [freya] from the server (shell.woo.pctf which resolves to 54.226.73.167) . Take a look at the traffic our reconnaissance team picked up, and see if you can get access to The Plague's server, at 54.226.73.167.

[freya]:http://play.plaidctf.com/files/freya-378469981a7016d6179a844fffe2a82b.tar.bz2

本地下载：[freya] [freyalocal]

[freyalocal]:/attach/freya-378469981a7016d6179a844fffe2a82b.tar.bz2

## bronies

### Web (800 pts)

We are trying to break into eXtreme Secure Solutions, where The Plague works as a system adminstrator. We have found that their internal company login page is at http://portal.essolutions.largestctf.com/. Recon has also revealed that The Plague likes to browse this site during work hours: http://54.196.225.30/ using the username ponyboy2004.
Remember, our main target is to break into the company portal, *not* the pony site.

UPDATE: The SQL injection was not intentional and does not help you solve the problem. We believe it has been fixed. If you have questions, please ask ricky on #pctf @ sendak.freenode.net.

UPDATE2: Also, bronies is not intended to be solved via client side (e.g. webkit) exploits - if you manage to do so though, that's fair game.

UPDATE3: Bronies was broken until 2013-04-13 07:26:28 UTC (the admin wasn't logging onto the internal portal properly). Please retry your exploits.

## 中国团队

[BlueLotus](http://play.plaidctf.com/profile/398)

[0ops](http://play.plaidctf.com/profile/143)

[Sigma](http://play.plaidctf.com/profile/411)

[L](http://play.plaidctf.com/profile/145)

[F4lcon](http://play.plaidctf.com/profile/130)

[Light 4 Freedom](http://play.plaidctf.com/profile/220)

## 排名

在线查看：[http://play.plaidctf.com/scoreboard] [scoreboard]

[scoreboard]:http://play.plaidctf.com/scoreboard

本地查看：

![](/image/scoreboard.png)

## 比赛规则

![](/image/instruction.png)

1. Plaid CTF 2014 is Web-based CTF. There is no need to set up VPN environment.

2. There is no limit in the number of people participating per team. Also, you only need one registration per team.

3. Sharing keys or solutions is prohibited. This action is subject to disqualification.

4. Attacking machines other than designated pCTF2014 machines is prohibited.

5. Don't be a jerk, eg. preventing other people from having fun.

6. If you think you have the valid key that the system rejects, contact us.

7. If you find any bug in the system, report it to us. We may give you bonus points :)

8. You need to have a valid Point of Contact (POC) to claim your prizes.

9. In order to claim prizes, a write-up is required.

10. Carnegie Mellon University (CMU) affiliated individuals or groups cannot claim prizes.

11. Plaid Parliament of Pwning (PPP) affiliated individuals or groups cannot claim prizes.

12. If you are not sure if something is a violation of the rules, ask us!

13. You should join our official IRC channel on freenode: #pctf

14. Cash prizes for top 3 teams are: 8192 USD, 4096 USD, and 2048 USD, respectively.

15. HF GL DD!