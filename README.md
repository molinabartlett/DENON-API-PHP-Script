# DENON API PHP Script
Simple script used to remote control a DENON receiver with IFTTT and Amazon Alexa.


***


This script uses the DENON API to control a DENON receiver using IFTTT and Amazon Alexa. Tested with DENON AVRX2400H. 

When it's done the process works like this: Alexa Command > IFTTT Webhook > PHP Script > DENON Receiver

Why do you need this PHP script? Unfortunately, the volume commands on the DENON receiver only increment by 1 so without this script you'd need to repeat "Alexa volume down" five times for it to make an audible difference. You also can't solve this with IFTTT because it doens't let you loop webhook commands. The PHP script allows you to loop the DENON volume API with a single voice command. It's also easier to update than individual IFTTT applets.



## INSTRUCTIONS


### 1. Port Forwarding

* First add a port forwarding rule in your router to forward the API request to your DENON Receiver. Choose whatever port you want but have it forward to <DENON IP Address>:8080. For example: 4566 -> 192.168.1.111:8080.
 
### 2. PHP Script

* Update the $ip variable to your home IP address and the $port variable to the port you're forwarding. 
* Upload the script to the webserver.

*NOTE: If you're using a hosting provider, make sure they have opened your specified port for outbound connections.*


### 3. IFTTT

* You need to create an IFTTT applet for each command. The ingredient is IF Alexa Say a specifc phase THEN trigger Webhook. 

Here's an example to mute the tv:

**IF ALEXA**

  * ***Say a specific phrase*** - "mute tv"

**WEBHOOK**

 * ***Method*** - Post
  
 * ***Body*** - NULL
  
 * ***URL*** - https://(yourserver)/denonavr.php?cmd=muteon
   * Format is (URL of script) + ?cmd= + (parameter) 
 
 * ***Content Type*** - application/x-www-form-urlencoded
  
  
**Parameters in PHP Script**

| Parameter | Action                |
|-----------|-----------------------|
| volup     | Volume Up             |
| wayvolup  | Volume Up More        |
| voldwn    | Volume Down           |
| wayvoldwn | Volume Down More      |
| mplay     | Switch input to Media |
| cblsat    | switch input to Cable |
| muteon    | Mute On               |
| muteoff   | Mute Off              |


  
### 4. Alexa
* If you don't want to say "Alexa trigger" before every phrase, set up a routine in Alexa as a shortcut for the IFTTT trigger.

## Examples

**Examples**

| Parameter | URL                                                 | IFTTT Cmd                     | Alexa Cmd              |
|-----------|-----------------------------------------------------|-------------------------------|------------------------|
| volup     | https://(yourserver)/denonavr.php?cmd=volup     | Alexa trigger volume up       | Alexa, volume up       |
| wayvolup  | https://(yourserver)/denonavr.php?cmd=wayvolup  | Alexa trigger volume way up   | Alexa, volume way up   |
| voldwn    | https://(yourserver)/denonavr.php?cmd=voldwn    | Alexa trigger volume down     | Alexa, volume down     |
| wayvoldwn | https://(yourserver)/denonavr.php?cmd=wayvoldwn | Alexa trigger volume way down | Alexa, volume way down |
| mplay     | https://(yourserver)/denonavr.php?cmd=mplay     | Alexa trigger Apple TV        | Alexa, Apple TV        |
| cblsat    | https://(yourserver)/denonavr.php?cmd=cblsat    | Alexa trigger TV              | Alexa, TV              |
| muteon    | https://(yourserver)/denonavr.php?cmd=muteon    | Alexa trigger mute tv         | Alexa, mute tv         |
| muteoff   | https://(yourserver)/denonavr.php?cmd=muteoff   | Alexa trigger unmute tv       | Alexa, unmute tv       |





## OTHER

* The DENON API documentation is linked if you need other commands.
* If your home IP address changes you only need to update the IP address in the PHP file. (Or you can set up DNS, it wasn't worth the effort to me).
* I'm not a developer, I'm just a dabbler that cobbled this together!
