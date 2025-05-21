Dennis Hanrieder - s2210238022    
assignment on /form    
ChatGbt Promt: Composer install is not recognised in visual studio terminal    

ChatGPT:
Here's what's going on:

❌ Problem:
You're getting this error:

nginx
Kopieren
Bearbeiten
composer : Die Benennung "composer" wurde nicht als Name eines Cmdlet ...
Which means:

The term "composer" is not recognized as the name of a cmdlet...

✅ Solution:
You don't have Composer installed or it's not in your system PATH.

🛠 How to Fix It (Windows):
Download and Install Composer

Go to: https://getcomposer.org/Composer-Setup.exe

Run the installer.

Make sure it adds Composer to your system PATH (there’s a checkbox during installation).

Verify Installation
After installing, restart VS Code or your terminal and run:

bash
Kopieren
Bearbeiten
composer --version
Once that works, go back to your Laravel project folder and run:

bash
Kopieren
Bearbeiten
composer install
Let me know when Composer is working or if you'd like help with Node/Vite setup next!
