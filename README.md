# castor-informatique.fr

Site web du Concours Castor (partie statique). Pour installer:

    git clone https://github.com/France-ioi/castor-informatique.fr.git
    git submodule update --init
    cd questions && git submodule update --init && cd ..
    bower install

Pour la dernière étape ci-dessus, vous aurez besoin de bower, que l'on 
installe sous linux ainsi:
   sudo apt-get install npm
   sudo npm install -g bower

En exécutant ensuite "bower install", si vous avez l'erreur :
   "/usr/bin/env: node: No such file or directory"
alors il faut faire :
  sudo ln -s /usr/bin/nodejs /usr/bin/node

puis copier `config_template.php` en `config.php` et renseigner.
