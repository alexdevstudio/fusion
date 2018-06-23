# WordPress Development With Trellis (Roots.io) and Vagrant


##Step 1

1. Clone this repo to your project folder
2. Remove .git folder of this repo
3. Create your own repository and Publish the project
4. Search Project Directory for default GitHub repository   "git@github.com:example/fusionico.pro.git" and replace with your new repository link (SSH format)

##Step 2

1. Open your project folder with Atom
2. Right Click on the root folder in Atom and select "Search in Directory" to replace all occurrences of "fusionico.pro" with your production domain name
3. Right Click on the root folder in Atom and select "Search in Directory" to replace all occurrences of "fusionico.local" with your development domain name


##Step 3

1. Open PowerShell as Administrator for Windows users or Terminal for Linux (Mac)
2. Navigate to your project folder via PowerShell (Terminal) | cd C:/project/path
3. Then from your project folder navigate into /trellis | cd trellis/
4. run command 'vagrant up' to create your VirtualBox instance for development server. It can take up to 15 mins if you run it for the first time. Also if you see that your PowerShell has stuck at the same point and not giving any errors nor proceeding just press some letter on your keyboard (sometimes PowerShell freezes like that) and the screen will refresh itself.  
