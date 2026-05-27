const { defineConfig } = require('vite');
const { resolve } = require('path');

module.exports = defineConfig({
    build: {
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'index.html'),
                apropos: resolve(__dirname, 'page/apropos.html'),
                contact: resolve(__dirname, 'page/contact.html'),
                historique: resolve(__dirname, 'page/historique.html'),
                organigramme: resolve(__dirname, 'page/organigramme.html'),
                services: resolve(__dirname, 'page/services.html'),
                inscription: resolve(__dirname, 'page/inscription.html'),
                "liste-eleves": resolve(__dirname, 'page/liste-eleves.html'),
                connexion: resolve(__dirname, 'page/connexion.html'),
                dashboard: resolve(__dirname, 'page/dashboard.html'),

                // Fichiers orphelins (inclus par sécurité)
                "ajouter-eleve": resolve(__dirname, 'page/ajouter-eleve.html'),
                eleves: resolve(__dirname, 'page/eleves.html'),
                login: resolve(__dirname, 'page/login.html'),
            },
        },
    },
});
