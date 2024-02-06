# R̅e̅s̅e̅t̅ M̅a̅i̅n̅W̅P̅ C̅h̅i̅l̅d̅

### A Master Reset Tool to reset the MainWP Child Plugin settings to default, as if you just installed it.
 
_Keep in mind ***this resets the entire plugin*** and you will have to reconnect.
Feel free to __use at your own risk__ instead of the SQL statement talked about Below._

# [WARNING] DO NOT USE ON MAINWP DASHBOARD INSTALLATION!

## THIS IS A FRESH START!
Using this plugin will ***ERASE ALL MainWP data from the Child Site.*** This also includes all Code Snipits that have been ran on the child
site using the [MainWP Code Snitpit plugin](https://mainwp.com/extension/code-snippets/ ). The snipits are stored withing the MainWP Child Plugin DB and will
need to be re-added once the site has been reconnected. Along with any other MainWP White Label settings, or other plugin settings etc...

## Tested up to Versions
* Tested with: MainWP-Child : v5.0.0
* Tested with WordPress     : v6.4.3

## Usage
1. Download the Plugin .Zip
2. Install like any other Plugin
3. Activate the plugin. It will automatically run and deactivate itself.
4. Delete the plugin after use by clicking the delete button on the plugin ( there are no Database entries created by this plugin )

##  About
#### Inspired by a conversation I had with Conor Treacy here: [MainWP User FB thread](https://www.facebook.com/groups/MainWPUsers/permalink/2461997537230239/)

I have used the SQL solution written at the bottom of this [MainWP User FB thread](https://www.facebook.com/groups/MainWPUsers/permalink/1139990406097632/)
here often when the MainWP Dashboard looses connection in order to regain control of the MainWP Child Plugin. However, I find the steps
involved in the process a bit tedious just to re-install a plugin. So I took the SQL solution and created a plugin out of it.

This plugin runs the same exact SQL query it's just in plugin form & cuts down the steps it takes to in order to reset the settings to default and gain access to your child plugin once again.
There is no need to log into CPanel, find out the DB name & log in to phpmyadmin etc... 
 

### Now it's just

1. Download
2. Install
3. Activate
4. Delete

## Screen Shots
![Results after plugin runs](https://klbs.host/hot-links/mainwp/fAlkrinfaujexpOiwHgfg.png)