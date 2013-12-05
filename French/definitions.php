<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

ET::$languageInfo["Francais"] = array(
	"locale" => "fr-FR",
	"name" => "Français",
	"description" => "Un pack de langue Français.",
	"version" => ESOTALK_VERSION,
	"author" => "West Indie Collective",
	"authorEmail" => "westindiecollective@gmail.com",
	"authorURL" => "http://forum.westindiecollective.org",
	"license" => "GPLv2"
);

// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "j M Y, g:ia \G\M\TO"; // see http://au.php.net/manual/en/function.date.php for details

$definitions["%d day ago"] = "hier";
$definitions["%d days ago"] = "il y a %d jours";
$definitions["%d hour ago"] = "il y a 1 heure";
$definitions["%d hours ago"] = "il y a %d heures";
$definitions["%d minute ago"] = "il y a 1 minute";
$definitions["%d minutes ago"] = "il y a %d mintues";
$definitions["%d month ago"] = "il y a 1 mois";
$definitions["%d months ago"] = "il y a %d mois";
$definitions["%d second ago"] = "il y a 1 seconde";
$definitions["%d seconds ago"] = "il y a %d secondes";
$definitions["%d week ago"] = "la semaine dernière";
$definitions["%d weeks ago"] = "il y a %d semaines";
$definitions["%d year ago"] = "l'année dernière";
$definitions["%d years ago"] = "il y a %d ans";

$definitions["%s and %s"] = "%s et %s";
$definitions["%s can view this conversation."] = "%s peut voir cette conversation.";
$definitions["%s changed %s's group to %s."] = "%s a changé le groupe de %s en %s.";
$definitions["%s changed your group to %s."] = "%s a changé votre groupe en %s.";
$definitions["%s conversation"] = "conversation %s";
$definitions["%s conversations"] = "conversations %s conversation";
$definitions["%s invited you to %s."] = "%s vous a invité à %s.";
$definitions["%s joined the forum."] = "%s a rejoint le forum.";
$definitions["%s post"] = "post %s";
$definitions["%s posted %s"] = "%s a posté %s";
$definitions["%s posted in %s."] = "%s a posté dans %s.";
$definitions["%s posts"] = "posts %s";
$definitions["%s reply"] = "réponse %s";
$definitions["%s replies"] = "réponses %s";
$definitions["%s Settings"] = "Paramètres %s";
$definitions["%s started the conversation %s."] = "%s a démarré la conversation %s.";
$definitions["%s tagged you in a post."] = "%s vous a mentionné dans un post.";
$definitions["%s will be able to view this conversation."] = "%s pourra voir cette conversation.";
$definitions["%s will be able to:"] = "%s pourra :";

$definitions["Success!"] = "Succès !";
$definitions["A new version of esoTalk (%s) is available."] = "Une nouvelle version de esoTalk (%s) est disponible.";
$definitions["a private conversation"] = "une conversation privée";
$definitions["Access the administrator control panel."] = "Accéder au panneau d'administration.";
$definitions["Account type"] = "Type de compte";
$definitions["Activate"] = "Activer";
$definitions["Activity"] = "Activité";
$definitions["Add"] = "Ajouter";
$definitions["Administration"] = "Administration";
$definitions["Administrator email"] = "Email administrateur";
$definitions["Administrator password"] = "Mot de passe administrateur";
$definitions["Administrator username"] = "Identifiant administrateur";
$definitions["Advanced options"] = "Options avancées";
$definitions["All Channels"] = "Toutes les catégories";
$definitions["Allow members to edit their own posts:"] = "Autoriser les membres à éditer leurs propres posts :";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "Déjà enregistré ? <a href='%s' class='link-login'>Connectez-vous !</a>";
$definitions["Appearance"] = "Apparence";
$definitions["Automatically star conversations that I reply to"] = "Suivre automatiquement une conversation à laquelle je réponds";
$definitions["Avatar"] = "Avatar";

$definitions["Back to channels"] = "Retour aux catégories";
$definitions["Back to conversation"] = "Retour à la conversation";
$definitions["Back to member"] = "Retour à la page membre";
$definitions["Back to members"] = "Retour à la liste des membres";
$definitions["Back to search"] = "Retour à la recherche";
$definitions["Background color"] = "Couleur d'arrière-plan";
$definitions["Background image"] = "Image d'arrière-plan";
$definitions["Base URL"] = "Base URL";
$definitions["Bold"] = "Gras";
$definitions["By %s"] = "Par %s";

$definitions["Can suspend/unsuspend members"] = "Peut suspendre/réactiver les membres";
$definitions["Cancel"] = "Annuler";
$definitions["Change %s's Permissions"] = "Changer les permissions de %s";
$definitions["Change avatar"] = "Changer l'avatar";
$definitions["Change Channel"] = "Changer la Catégorie";
$definitions["Change channel"] = "Changer la catégorie";
$definitions["Change username"] = "Changer l'identifiant";
$definitions["Change Password or Email"] = "Changer le Mot de Passe ou l'Email";
$definitions["Change Password"] = "Changer de Mot de Passe";
$definitions["Change password"] = "Changer de mot de passe";
$definitions["Change permissions"] = "Change permissions";
$definitions["Change"] = "Changer";
$definitions["Channel description"] = "Description de la catégorie";
$definitions["Channel List"] = "Liste des Catégories";
$definitions["Channel title"] = "Titre de la catégorie";
$definitions["Channel slug"] = "Slug de la catégorie";
$definitions["Channels"] = "Catégories";
$definitions["Choose a secure password of at least %s characters"] = "Choisir un mot de passe sécurisé d'au moins %s caractères.";
$definitions["Choose what people will see when they first visit your forum."] = "Choisir ce que les gens verront en premier lorsqu'ils visiteront le forum.";
$definitions["Click on a member's name to remove them."] = "Cliquer sur le nom d'un membre pour l'enlever.";
$definitions["Close registration"] = "Inscription fermée";
$definitions["Confirm password"] = "Confirmer le mot de passe";
$definitions["Context"] = "Contexte";
$definitions["Controls"] = "Contrôles";
$definitions["Conversation"] = "Conversation";
$definitions["Conversations participated in"] = "Conversations auxquelles il a participé";
$definitions["Conversations started"] = "Conversations commencées";
$definitions["Conversations"] = "Conversations";
$definitions["Copy permissions from"] = "Copier les permissions de";
$definitions["Create Channel"] = "Créer une Catégorie";
$definitions["Create Group"] = "Créer un Groupe";
$definitions["Create Member"] = "Créer un Membre";
$definitions["Customize how users can become members of your forum."] = "Choisir comment les utilisateurs peuvent s'enregistrer sur le forum.";
$definitions["Customize your forum's appearance"] = "Choisir l'apparence de votre forum";

$definitions["Dashboard"] = "Tableau de bord";
$definitions["Default forum language"] = "Langage par défaut du forum";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>Supprimer</strong> définitivement toutes les conversations.";
$definitions["Delete Channel"] = "Supprimer la Catégorie";
$definitions["Delete conversation"] = "Supprimer la conversation";
$definitions["Delete member"] = "Supprimer le membre";
$definitions["Delete Member"] = "Supprimer Membre";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>Supprimer les messages de ce membre.</strong> Tous les messages de ce membre seront marqués comme supprimé, mais il sera possible de les restaurer manuellement.";
$definitions["Delete"] = "Supprimer";
$definitions["Deleted %s by %s"] = "Supprimé %s par %s";
$definitions["Disable"] = "Désactiver";
$definitions["Discard"] = "Ignorer";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "Pas encore inscrit ? <a href='%s' class='link-join'>Inscrivez-vous !</a>";
$definitions["Don't repeat"] = "Ne pas répéter";

$definitions["Edit Channel"] = "Éditer la Catégorie";
$definitions["Edit Group"] = "Éditer le Groupe";
$definitions["Edit member groups"] = "Éditer les groupes";
$definitions["Edit your profile"] = "Éditer votre profil";
$definitions["Edit"] = "Éditer";
$definitions["Edited %s by %s"] = "Édité %s par %s";
$definitions["Editing permissions"] = "Édition des permissions";
$definitions["Email me when I'm added to a private conversation"] = "M'envoyer un email lorsque je suis ajouté à une conversation privée";
$definitions["Email me when someone posts in a conversation I have starred"] = "M'envoyer un email lorsque quelqu'un répond à une conversation que je suis";
$definitions["Email"] = "Email";
$definitions["Enable"] = "Activer";
$definitions["Enabled"] = "Activé";
$definitions["Enter a conversation title"] = "Entrer un titre";
$definitions["Error"] = "Erreur";
$definitions["esoTalk version"] = "version esoTalk";
$definitions["Everyone"] = "Tout le monde";

$definitions["Fatal Error"] = "Oh oh! C'est une erreur fatale...";
$definitions["Feed"] = "Flux";
$definitions["Filter by name or group..."] = "Filtrer par nom ou groupe...";
$definitions["Filter conversations..."] = "Filtrer les conversations...";
$definitions["Find this post"] = "Trouver ce post"; // post ou message ?
$definitions["First posted"] = "Premier post";
$definitions["Follow to receive notifications"] = "Suivre pour recevoir les notifications";
$definitions["For %s seconds"] = "Pendant %s secondes"; // pour, depuis ?
$definitions["Forever"] = "Toujours";
$definitions["Forgot?"] = "Oublié ?";
$definitions["Forgot Password"] = "Mot de passe oublié";
$definitions["Forum header"] = "En-tête du Forum";
$definitions["Forum language"] = "Langue du Forum";
$definitions["Forum Settings"] = "Paramètres du Forum";
$definitions["Forum Statistics"] = "Statistiques du Forum";
$definitions["Forum title"] = "Titre du Forum";
$definitions["forumDescription"] = "%s est un forum à propos de %s, et %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Assigner à ce groupe la permission 'Modérer' sur toutes les catégories existantes";
$definitions["Global permissions"] = "Permissions générales";
$definitions["Go to top"] = "Remonter";
$definitions["Group name"] = "Nom du groupe";
$definitions["group.administrator"] = "Administrateur";
$definitions["group.administrator.plural"] = "Administrateurs";
$definitions["group.guest"] = "Invité";
$definitions["group.guest.plural"] = "Invités";
$definitions["group.member"] = "Membre";
$definitions["group.member.plural"] = "Membres";
$definitions["group.Moderator"] = "Modérateur";
$definitions["group.Moderator.plural"] = "Modérateurs";
$definitions["group.suspended"] = "Suspendu"; // plural ?
$definitions["Groups can be used to categorize members and give them certain privileges."] = "Les Groupes peuvent être utilisés pour classer les membres et leur assigner certain droits.";
$definitions["Groups"] = "Groupes";

$definitions["Header"] = "En-tête";
$definitions["Header color"] = "Couleur d'en-tête";
$definitions["Hide"] = "Cacher";
$definitions["Home page"] = "Accueil";
$definitions["HTML is allowed."] = "HTML est autorisé.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "Si vous rencontrez d'autres problèmes ou si vous cherchez juste un peu d'aide pour l'installation, n'hésitez pas à aller voir le <a href='%s'>forum de support esoTalk</a>.";
$definitions["Install esoTalk"] = "Installer esoTalk";
$definitions["Install My Forum"] = "Installer Mon Forum";
$definitions["Installed Languages"] = "Langues installées";
$definitions["Installed Plugins"] = "Plugins installés";
$definitions["Installed plugins"] = "plugins installés";
$definitions["Installed Skins"] = "Thèmes installés";
$definitions["Installed skins"] = "thèmes installés";
$definitions["is %s"] = "est %s";

$definitions["Joined"] = "Inscrit";
$definitions["Jump to last"] = "Aller au dernier"; // à la fin ?
$definitions["Jump to unread"] = "Aller au non-lu";
$definitions["just now"] = "à l'instant";

$definitions["Keep me logged in"] = "Se souvenir de moi"; // me garder connecté ? connexion automatique ?
$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>Garder les posts de ce membre.</strong> Tous les posts de ce membre resteront intacts, mais l'auteur sera marqué comme [supprimé].";

$definitions["label.draft"] = "Brouillon";
$definitions["label.locked"] = "Verrouillé";
$definitions["label.muted"] = "Ignoré"; // Sourdine ? Muet ?
$definitions["label.private"] = "Privé";
$definitions["label.sticky"] = "Post-it";
$definitions["Labels"] = "Étiquettes";
$definitions["Last active"] = "Dernière activité";
$definitions["Last active %s"] = "Dernière activité %s";
$definitions["Latest News"] = "Dernières nouvelles";
$definitions["Loading..."] = "Chargement...";
$definitions["Lock"] = "Verrouiller";
$definitions["Log In"] = "Se connecter";
$definitions["Log Out"] = "Se déconnecter";

$definitions["Make member and online list visible to:"] = "Rendre la liste des membres et ceux en ligne visible à :";
$definitions["Manage Groups"] = "Gérer les Groupes";
$definitions["Manage Languages"] = "Gérer les langues";
$definitions["Manage your forum's channels (categories)"] = "Gérer les catégories du forum";
$definitions["Mark as read"] = "Marquer comme lu";
$definitions["Mark all as read"] = "Marquer tout comme lu";
$definitions["Mark listed as read"] = "Marquer la sélection comme lu";
$definitions["Maximum size of %s. %s."] = "Taille maximale de %s. %s.";
$definitions["Member groups"] = "Groupes";
$definitions["Member list"] = "Liste des membres";
$definitions["Member List"] = "Liste des Membres";
$definitions["Member privacy"] = "Vie privée des membres";
$definitions["Members Allowed to View this Conversation"] = "Membres autorisés à voir cette conversation";
$definitions["Members Online"] = "Membres en ligne";
$definitions["Members"] = "Membres";
$definitions["Mobile skin"] = "Thème mobile";
$definitions["Moderate"] = "Modérer";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>Déplacer</strong> les conversations vers la catégorie :";
$definitions["Mute conversation"] = "Ignoré la conversation";
$definitions["MySQL database"] = "Base de données MySQL";
$definitions["MySQL host address"] = "Adresse hôte MySQL";
$definitions["MySQL password"] = "Mot de passe MySQL";
$definitions["MySQL queries"] = "Requêtes MySQL";
$definitions["MySQL table prefix"] = "Préfix de table MySQL";
$definitions["MySQL username"] = "Nom d'utilisateur MySQL";
$definitions["MySQL version"] = "Version de MySQL";

$definitions["Name"] = "Nom";
$definitions["never"] = "jamais";
$definitions["%s new"] = "%s nouveau"; // not sure... Where is that ? o_O
$definitions["New conversation"] = "Nouvelle conversation";
$definitions["New Conversation"] = "Nouvelle Conversation";
$definitions["New conversations in the past week"] = "Nouvelles conversations durant la dernière semaine";
$definitions["New email"] = "Nouvel email";
$definitions["New members in the past week"] = "Nouveaux membres durant la dernière semaine";
$definitions["New password"] = "Nouveau mot de passe";
$definitions["New posts in the past week"] = "Nouveaux posts durant la dernière semaine";
$definitions["New username"] = "Nouveau nom d'utilisateur";
$definitions["Next Step"] = "Étape suivante";
$definitions["Next"] = "Suivant";
$definitions["No preview"] = "Aucun aperçu";
$definitions["No"] = "Non";
$definitions["Notifications"] = "Notifications";
$definitions["Now"] = "À l'instant";

$definitions["OK"] = "OK";
$definitions["Online"] = "En ligne";
$definitions["online"] = "en ligne";
$definitions["Open registration"] = "Inscriptions ouvertes";
$definitions["optional"] = "optionnel";
$definitions["Order By:"] = "Trié par :";
$definitions["Original Post"] = "Premier Post";

$definitions["Page Not Found"] = "Page Non Trouvée :(";
$definitions["Password"] = "Mot de passe";
$definitions["PHP version"] = "version de PHP";
$definitions["Plugins"] = "Plugins";
$definitions["Post a Reply"] = "Répondre";
$definitions["Post count"] = "Nombre de posts";
$definitions["Posts"] = "Posts";
$definitions["Preview"] = "Aperçu";
$definitions["Previous"] = "Précédents";

$definitions["Quote"] = "Citer";
$definitions["quote"] = "citer";

$definitions["Read more"] = "Plus de messages";
$definitions["Recent posts"] = "Posts récents";
$definitions["Recover Password"] = "Réinitialiser le mot de passe";
$definitions["Registered members"] = "Membres enregistrés";
$definitions["Registration"] = "Inscription";
$definitions["Remove avatar"] = "Supprimer l'avatar";
$definitions["Rename Member"] = "Renommer un Membre";
$definitions["Reply"] = "Répondre";
$definitions["Report a bug"] = "Soumettre un bug";
$definitions["Require users to confirm their email address"] = "Force la confirmation des adresses emails";
$definitions["Restore"] = "Restaurer";
$definitions["restore"] = "restaurer";
$definitions["Reset"] = "Réinitialiser";

$definitions["Save Changes"] = "Valider les modifications";
$definitions["Save Draft"] = "Enregistrer le brouillon";
$definitions["Search conversations..."] = "Rechercher des conversations...";
$definitions["Search within this conversation..."] = "Rechercher dans cette conversation...";
$definitions["Search"] = "Rechercher";
$definitions["See the private conversations I've had with %s"] = "Voir les conversation privées que j'ai eu avec %s";
$definitions["Set a New Password"] = "Mettre un nouveau mot de passe";
$definitions["Settings"] = "Paramètres";
$definitions["Show an image in the header"] = "Afficher une image dans l'en-tête";
$definitions["Show matching posts"] = "Voir les posts correspondants";
$definitions["Show the channel list by default"] = "Voir la liste des catégories par défaut";
$definitions["Show the conversation list by default"] = "Voir la liste des conversations par défaut";
$definitions["Show the forum title in the header"] = "Afficher le titre du forum dans l'en-tête";
$definitions["Sign Up"] = "S'inscrire";
$definitions["Skins"] = "Thèmes";
$definitions["Specify Setup Information"] = "Renseigner les informations de configuration";
$definitions["Star to receive notifications"] = "Suivre pour recevoir des notifications";
$definitions["Starred"] = "Suivi";
$definitions["Start"] = "Démarrer";
$definitions["Start a conversation"] = "Démarrer une conversation";
$definitions["Start a new conversation"] = "Démarrer une nouvelle conversation";
$definitions["Start a private conversation with %s"] = "Démarrer une conversation privée avec %s";
$definitions["Start Conversation"] = "Démarrer une Conversation";
$definitions["Starting a conversation"] = "Démarre une conversation";
$definitions["Statistics"] = "Statistiques";
$definitions["statistic.conversation.plural"] = "%s conversations";
$definitions["statistic.conversation"] = "%s conversation";
$definitions["statistic.member.plural"] = "%s membres";
$definitions["statistic.member"] = "%s membre";
$definitions["statistic.online.plural"] = "%s en ligne";
$definitions["statistic.online"] = "%s en ligne";
$definitions["statistic.post.plural"] = "%s posts";
$definitions["statistic.post"] = "%s post";
$definitions["Sticky"] = "Post-it";
$definitions["Subscribe"] = "S'abonner";
$definitions["Subscribed"] = "Abonné";
$definitions["Subscription"] = "Abonnement";
$definitions["Suspend member"] = "Suspendre le membre";
$definitions["Suspend members."] = "Suspendre les membres.";
$definitions["Suspend"] = "Suspendre";

$definitions["To get started with your forum, you might like to:"] = "Pour commencer sur votre forum, vous pourriez :"; // :/

$definitions["Unhide"] = "Décacher"; // révéler ?
$definitions["Uninstall"] = "Désinstaller";
$definitions["Unlock"] = "Déverrouiller";
$definitions["Unmute conversation"] = "Ne plus ignorer la conversation";
$definitions["Unstarred"] = "Non suivi";
$definitions["Unsticky"] = "Enlever le post-it";
$definitions["Unsubscribe new users by default"] = "Désabonner les nouveaux utilisateurs par défaut";
$definitions["Unsubscribe"] = "Désabonner";
$definitions["Unsubscribed"] = "Désabonné";
$definitions["Unsuspend member"] = "Réactiver le membre";
$definitions["Unsuspend"] = "Réactiver";
$definitions["Until someone replies"] = "Jusqu'à ce que quelqu'un réponde";
$definitions["Untitled conversation"] = "Conversation sans titre";
$definitions["Upgrade esoTalk"] = "Mettre à jour esoTalk";
$definitions["Use a background image"] = "Utiliser une image de fond";
$definitions["Use for mobile"] = "Use le module pour les mobiles"; // to verify
$definitions["Use friendly URLs"] = "Utiliser des URLs racourcies";
$definitions["Used to verify your account and subscribe to conversations"] = "Utilisé pour vérifier le compte et les abonnements aux conversations";
$definitions["Username"] = "Nom d'utilisateur";
$definitions["Username or Email"] = "Nom d'utilisateur ou Email";

$definitions["View %s's profile"] = "Voir le profil de %s";
$definitions["View all notifications"] = "Voir les notifications";
$definitions["View more"] = "Voir plus";
$definitions["View your profile"] = "Voir votre profile";
$definitions["View"] = "Voir";
$definitions["Viewing: %s"] = "En train de lire : %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> sur %s posts";

$definitions["Warning"] = "Oh oh, quelque chose ne va pas !";
$definitions["Welcome to esoTalk!"] = "Bienvenue sur esoTalk!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."] = "Nous vous avons connecté et emmené directement sur le panneau d'administration de votre forum. De rien :).";
$definitions["Write a reply..."] = "Écrire une réponse...";

$definitions["Yes"] = "Oui";
$definitions["You can manage channel-specific permissions on the channels page."] = "Vous pouvez changer les permissions propres à une catégorie sur la page des catégories.";
$definitions["Your current password"] = "Mot de passe actuel";


// Messages.
$definitions["message.404"] = "Et zut - la page que tu cherches ne peut être trouvée! Essaye de revenir à la page précédente et de cliquer sur un autre lien. Ou autre chose.";
$definitions["message.ajaxDisconnected"] = "Impossible de communiquer avec le serveur. Patiente quelques secondes et <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>essaye à nouveau</a>, ou <a href='' onclick='window.location.reload();return false'>rafraichit la page</a>.";
$definitions["message.ajaxRequestPending"] = "Hey! On bosse encore sur un truc pour toi! Si tu quittes cette page tu pourrais perdre des changements récents que tu as fait, donc attends un peu, ok?";
$definitions["message.avatarError"] = "Il y a eut un problème durant l'envoi de ton avater. Assure toi d'utiliser un type d'image valide (.jpg, .png, ou .gif) et que le fichier n'est pas trop volumineux.";
$definitions["message.cannotDeleteLastChannel"] = "Eh, attends un peu,  tu ne peux pas supprimer la dernière catégorie ! Où vont aller tes conversations sinon ? C'est pas possible.";
$definitions["message.changesSaved"] = "Les changements ont été effectués.";
$definitions["message.channelsHelp"] = "Les Catégories sont utilisées pour classer les conversations. Tu peux créer autant de catégorie que tu le souhaites, les réorganiser, et les imbriquer en les déplaçant ci dessous.";
$definitions["message.channelSlugTaken"] = "Ce slug est déjà utilisé par une autre catégorie.";
$definitions["message.confirmDelete"] = "Tu es bien sûr de vouloir supprimer? Sérieux, tu pourras pas le récupérer par la suite.";
$definitions["message.confirmDiscardReply"] = "Tu n'as pas sauver ta réponse comme brouillon. Veux tu l'ignorer ?";
$definitions["message.confirmEmail"] = "Avant de commencer à utiliser ton nouveau compte, tu dois confirmer ton adresse email. Dans les deux prochaines minutes tu devrais recevoir un email contenant un lien d'activation.";
$definitions["message.confirmLeave"] = "Wouho, tu n'as pas sauvegarder le message que tu est en train d'éditer ! Si tu quittes la page, tu perdras toutes les modifications faites. C'est bon t'es sûr ?";
$definitions["message.connectionError"] = "esoTalk n'a pu se connecter au serveur MySQL. L'erreur est:<br/>%s";
$definitions["message.conversationDeleted"] = "La conversation a été supprimée. Cool non ?";
$definitions["message.conversationNotFound"] = "Pour une certaine raison cette conversation ne peut être visualisée. Peut-être a-t-elle été supprimée ? Ou alors elle est privée, dans ce cas tu dois être déconnecté our alors tu n'y est pas invité. Mec, j'espère qu'ils ne parlent pas de toi dans ton dos !";
$definitions["message.cookieAuthenticationTheft"] = "Pour des raisons de sécurité, on n'a pas pu utilisé ton cookie 'se rappeler de moi'. Connecte toi manuellement!";
$definitions["message.deleteChannelHelp"] = "Woah, on garde son calme! Si tu supprime cette catégorie tu ne pourras pas revenir en arrière. A moins que tu ne construise une machine à voyager dans le temps. Mais bon, il n'y a aucun moyen <em>facile</em> de le faire. Toutes les conversations de cette catégories seront déplacées vers une de ton choix.";
$definitions["message.emailConfirmed"] = "Cool! Ton compte a été validé et tu peux maintenant commencer à participer aux conversations. Et pourquoi ne pas en <a href='".URL("conversation/start")."'>commencer</a> une toi même, tiens ?";
$definitions["message.emailDoesntExist"] = "Cette adresse email ne correspond à aucun membre. Ne te serais tu pas trompé ?";
$definitions["message.emailNotYetConfirmed"] = "Tu dois confirmer ton adresse email avant de pouvoir te connecter avec ! Si tu n'a pas encore reçu d'email de validation, <a href='%s'>clique ici pour qu'on en renvoit un autre</a>.";
$definitions["message.emailTaken"] = "Malédiction, il y'a déjà un membre avec cette adresse email!";
$definitions["message.empty"] = "Tu dois remplir ce champ.";
$definitions["message.emptyPost"] = "Youpi... euh, tu devrais peut être tapper quelque chose dans ton message, non ?";
$definitions["message.emptyTitle"] = "Le titre de ta conversation ne peut pas être vide. Sinon comment les gens vont pouvoir cliquer sur du vide ? Penses y.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk est déjà installé.</strong><br/><small>Pour le réinstaller, tu dois supprimer <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "Une nouvelle version de esoTalk, %s, est dispo.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "Il est recommandé de toujours avoir la dernière version installée pour réduire les risques de sécurité. Et puis, il y a peut être des nouvelles fonctionnalités sympas !";
$definitions["message.esoTalkUpToDate"] = "Cette version de esoTalk est à jour.";
$definitions["message.esoTalkUpToDateHelp"] = "Je suis un pauvre étudiant d'université qui a passé des centaines d'heures de développement sur esoTalk. Si tu l'aimes, pense à faire une <a href='%s' target='_blank'>donation</a> s'il te plait.";
$definitions["message.fatalError"] = "<p>esoTalk a rencontré une méchante erreur qui rend impossible de faire n'importe quoi que tu tentes de faire. Mais ne t'en fais pas - <strong>voici quelques trucs que tu peux essayer</strong>:</p>\n<ul>\n<li>Vas dehors, promènes le chien, prends un café... et puis <strong><a href='%1\$s'>réessayes</a></strong>!</li>\n<li>ISi tu est administrateur du forum, tu peux aller faire un tour sur le <a href='%2\$s'>site de esoTalk</a></strong>.</li>\n<li>Frapper l'ordinateur - Ca marche des fois pour moi.</li>\n</ul>";
$definitions["message.fatalErrorInstaller"] = "<p>esoTalk a rencontré une méchante erreur qui rend impossible de faire n'importe quoi que tu tentes de faire. Mais ne t'en fais pas - <strong>voici quelques trucs que tu peux essayer</strong>:</p>\n<ul>\n<li><p><strong>Essayes à nouveau.</strong> Tout le monde fait des erreurs - peut être que l'ordinateur en a fait une cette fois !</p></li>\n<li><p><strong>Reviens en arrière et vérifie les paramètres.</strong> En particulier, vérifie les informations de la base de données.</p></li>\n<li><p><strong>Demande de l'aide.</strong> Vas sur <a href='%s'>le forum de esoTalk/a> et recherche si quelqu'un a le même problème. Sinon lance une conversation incluant les détails ci dessous.</p></li>\n</ul>";
$definitions["message.fatalErrorUpgrader"] = "<p>esoTalk a rencontré une méchante erreur qui rend impossible de faire n'importe quoi que tu tentes de faire. Mais ne t'en fais pas - <strong>voici quelques trucs que tu peux essayer</strong>:</p>\n<ul>\n<li><p><strong>Essayes à nouveau.</strong> Tout le monde fait des erreurs - peut être que l'ordinateur en a fait une cette fois !</p></li>\n<li><p><strong>Demande de l'aide.</strong> Vas sur <a href='%s'>le forum de esoTalk/a> et recherche si quelqu'un a le même problème. Sinon lance une conversation incluant les détails ci dessous.</p></li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Quelque chose a mal tourné et le fichier que tu as sélectionné ne peut être envoyé. Il est peut être trop volumineux ou dans un format invalide ?";
$definitions["message.fileUploadFailedMove"] = "Le fichier que tu a envoyé ne peut être remis à destination. Contacte l'administrateur du forum.";
$definitions["message.fileUploadNotImage"] = "Le fichier que tu tentes d'envoyer n'est pas dans un format d'image accepté.";
$definitions["message.fileUploadTooBig"] = "Le fichier selectionné ne peut être envoyé car il est trop volumineux.";
$definitions["message.forgotPasswordHelp"] = "Alors comme ça tu as oublié ton mot de passe ?! Ne t'inquiète pas ça m'arrive tout le temps. Renseigne juste ton adresse email et nous allons t'envoyer les instructions pour en créer un nouveau.";
$definitions["message.fulltextKeywordWarning"] = "Information: les mots de moins de 4 caractères et les mots anglais commun tel que 'the' et 'for', sont ignoré lors de la recherche.";
$definitions["message.gambitsHelp"] = "Gambits sont des phrases qui décrivent ce que tu cherches. Clique sur un gambit pour l'insérer dans le champs de recherche. Double-clique pour chercher immédiatement. Les mot-clés habituels fonctionnent aussi !";
$definitions["message.gdNotEnabledWarning"] = "L'<strong>extension GD</strong> n'est pas activée.<br/><small>C'est obligatoire pour sauver les avatars. Demande à ton hébergeur ou administrateur de l'installer/activer.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "<strong>MySQL 4 ou supérieur</strong> doit être installé et <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>l'extension MySQL activée dans PHP</a>.<br/><small>Installe le ou demande à ton hébergeur/administreur de le faire.</small>";
$definitions["message.greaterPHPVersionRequired"] = "<strong>PHP 5.0.0 ou supérieur</strong> doit être installé pour faire tourner esoTalk.<br/><small>Mets à jour ton installation PHP ou fait la demande auprès de ton hébergeur ou administrateur.</small>";
$definitions["message.incorrectLogin"] = "Indentifiants invalides.";
$definitions["message.incorrectPassword"] = "Mot de passe actuel invalide.";
$definitions["message.installerAdminHelp"] = "esoTalk utilisera ces informations pour configurer le compte administrateur du forum.";
$definitions["message.installerFilesNotWritable"] = "esoTalk ne peut écrire dans les fichiers/dossiers suivants: <strong>%s</strong>.<br/><small>Pour résoudre le problème, tu dois utiliser un client FTP et <strong>chmod 777</strong> sur ceux ci.</small>";
$definitions["message.installerMySQLHelp"] = "esoTalk nécéssite un accès a MySQL pour stocker toutes les données du forum (conversations et messages). Si tu n'es pas certains de ces détails, tu dois demander à ton hébergeur.";
$definitions["message.installerWelcome"] = "<p>Bienvenue dans l'installeur esoTalk ! On a besoin de certaines informations pour configurer le forum.</p>\n<p>Si tu as besoin d'aide, rends toi sur <a href='%s'>esoTalk support forum</a>.</p>";
$definitions["message.invalidChannel"] = "Tu as selectionné une catégorie incorrecte !";
$definitions["message.invalidEmail"] = "Il semble que cet email n'est pas valide...";
$definitions["message.invalidUsername"] = "Tu dois choisir un nom d'utilisateur entre 3 et 20 caractères alphanumériques.";
$definitions["message.javascriptRequired"] = "Cette page nécessite JavaScript pour fonctionner correctement.";
$definitions["message.languageUninstalled"] = "Le pack de langue a été installé.";
$definitions["message.locked"] = "Hm, Il semble que cette conversation soit <strong>vérouillée</strong>, tu ne peux donc pas y répondre.";
$definitions["message.loginToParticipate"] = "Pour démarrer une conversation ou répondre à des message, connecte toi.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Se connecter</a> ou <a href='%2\$s' class='link-join'>S'incrire</a> pour répondre!";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Se connecter</a> pour afficher certaines catégories qui peuvent être cachées aux invités.";
$definitions["message.memberNotFound"] = "Hm, Il n'y a personne de ce nom là ici.";
$definitions["message.memberNoPermissionView"] = "Ce membre ne peut pas être ajouté car il n'a pas la permission de voir la catégorie dans laquelle ce trouve cette conversation.";
$definitions["message.nameTaken"] = "Le nom entré est pris ou est un mot réservé.";
$definitions["message.newSearchResults"] = "Il s'est passé des choses depuis ta recherche. <a href='%s'>Rafraichir</a>";
$definitions["message.noActivity"] = "%s n'a encore rien fait sur ce forum !";
$definitions["message.noMembersOnline"] = "Aucun membre en ligne actuellement.";
$definitions["message.noNotifications"] = "Tu n'as pas de notification.";
$definitions["message.noPermission"] = "Mauvais garçon ! Tu n'as pas la permission de faire cette action.";
$definitions["message.noPermissionToReplyInChannel"] = "Tu n'as pas la permission de répondre aux conversations de cette catégorie.";
$definitions["message.noPluginsInstalled"] = "Aucun plugins n'est installé actuellement.";
$definitions["message.noSearchResults"] = "Auncune conversation correspondante à la recherche n'a été trouvée.";
$definitions["message.noSearchResultsMembers"] = "Aucun membre correspondant à la recherche.";
$definitions["message.noSearchResultsPosts"] = "Aucun message correspondant à la recherche..";
$definitions["message.noSkinsInstalled"] = "Aucun skin actuellement installé.";
$definitions["message.notWritable"] = "<code>%s</code> n'est pas modifiable. Tente <code>chmod 777</code>, ou s'il n'existe pas, <code>chmod</code> le dossier qui le contient.";
$definitions["message.pageNotFound"] = "La page demandée ne peut être trouvée.";
$definitions["message.passwordChanged"] = "C'est bon, ton mot de passe a été changé. Tu peux te connecté ! Essaye de t'en souvenir cette fois ci";
$definitions["message.passwordEmailSent"] = "Ok, on a envoyé un email contenant un lien pour réinialiser ton mot de passe. Vérifie ton dossier spam si jamais tu ne le reçois pas dans les minutes qui viennent. Et oui des fois on nous traite comme du spam - tu y crois toi?!";
$definitions["message.passwordsDontMatch"] = "Ton mot de passe ne correspond pas.";
$definitions["message.passwordTooShort"] = "Ton mot de passe est trop court.";
$definitions["message.pluginCannotBeEnabled"] = "Le plugin <em>%s</em> ne peut pas être activé: %s";
$definitions["message.pluginDependencyNotMet"] = "Pour activer ce plugin, la version %s %s doit être installéé et activée.";
$definitions["message.pluginUninstalled"] = "Le plugin a été désintallé.";
$definitions["message.postNotFound"] = "Le message est introuvable.";
$definitions["message.postTooLong"] = "Ton message est vraiment, vraiment long ! Trop long ! La taille maximum autorisée pour un message est de %s. Et c'est déjà très long!";
$definitions["message.preInstallErrors"] = "Les erreurs suivantes sont apparues dans ton installation. Elles doivent être corrigées avant de poursuivre l'installation.";
$definitions["message.preInstallWarnings"] = "Les erreurs suivantes sont apparues dans ton installation. Tu peux les ignorer mais esoTalk ne fonctionnera peut être pas correctement.";
$definitions["message.reduceNumberOfGambits"] = "Réduis le nombre de gambit ou mot clé pour élargir le nombre de résultat.";
$definitions["message.registerGlobalsWarning"] = "PHP's <strong>register_globals</strong> setting is enabled.<br/><small>While esoTalk can run with this setting on, it is recommended that it be turned off to increase security and to prevent esoTalk from having problems.</small>";
$definitions["message.registrationClosed"] = "L'inscription sur ce forum n'est pas ouverte au public.";
$definitions["message.removeDirectoryWarning"] = "Hey! On dirait que tu n'as pas supprimé le répertoire <code>%s</code> comme on te l'a dit ! Tu devrais le faire, juste pour être sur de ne pas rendre la tâche trop simple à ces hackers.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode</strong> is enabled.<br/><small>This could potentially cause problems with esoTalk, but you can still proceed if you cannot turn it off.</small>";
$definitions["message.searchAllConversations"] = "Essaye de chercher ces termes dans toutes les conversations.";
$definitions["message.setNewPassword"] = "Bien! Maintenant, quel mot de passe souhaite tu choisir ? Pas le nom de ton chat j'espère...";
$definitions["message.skinUninstalled"] = "Le skin a été désinstallé";
$definitions["message.suspended"] = "Aïe! Un modérateur a <strong>suspendu</strong> ton compte. Ca craint, mais jusqu'à ce que la suspension soit levée tu ne peut plus faire grand chose ici. Ouais, on les emmerde !";
$definitions["message.suspendMemberHelp"] = "Suspendre %s les empèchera de répondre aux conversation, en commencer de nouvelles et voir les conversations privées. Ils seront traités comme de simple invités.";
$definitions["message.tablePrefixConflict"] = "L'installeur a detecté une autre installation de EsoTalk sur la même base de donnée avec le même préfixe.<br/>Pour écraser cette installation de esoTalk, clique 'Installer mon forum' encore une fois. <strong>Toutes les données seront perdues.</strong><br/>Si tu souhaites créer une installation en parallèle, <strong>change le prefix des tables</strong>.";
$definitions["message.unsuspendMemberHelp"] = "Supprimer la suspension de %s les autorisera à participer aux conversations du forum à nouveau.";
$definitions["message.upgradeSuccessful"] = "esoTalk a été mis à jour avec succés.";
$definitions["message.waitToReply"] = "Tu dois attendre au moins %s secondes entre chaque message. Respire un grand coup et réessaye.";
$definitions["message.waitToSearch"] = "Hop hop hop, on se calme! On dirait que tu tentes un peu trop de recherches. Attends %s secondes et réessaye.";


// Emails.
$definitions["email.confirmEmail.body"] = "Quelqu'un (sûrement toi!) s'est inscrit sur le forum '%1\$s' avec cette adresse email.\n\nSi c'est toi, visite le lien suivant et ton compte sera active:\n%2\$s";
$definitions["email.confirmEmail.subject"] = "%1\$s, confirmation d'adresse email";
$definitions["email.footer"] = "\n\n(Si tu ne souhaites plus recevoir ce type d'emails, <a href='%s'>clique ici</a>.)";
$definitions["email.forgotPassword.body"] = "Quelqu'un (avec un peu de chance c'est toi!) a soumit une requête de mot de passe oublié pour ton compte sur le forum '%1\$s'. Si tu ne souhaites pas changer de mot de passe, ignore simplement cet email et rien ne changera.\n\nCependant, si tu as vraiment oublié ton mot de passe et que tu souhaites en choisir un nouveau, rend toi ici:\n%2\$s";
$definitions["email.forgotPassword.subject"] = "Mot de passe oublié, %1\$s?";
$definitions["email.header"] = "Salut %s!\n\n";
$definitions["email.mention.body"] = "%1\$s parle de toi dans une message dans la conversation '%2\$s'.\n\nPour voir le message:\n%3\$s";
$definitions["email.mention.subject"] = "%1\$s parle de toi";
$definitions["email.privateAdd.body"] = "Tu a été ajouté à une conversation privée intitulée '%1\$s'.\n\nPour voir cette conversation, suivez le lien suivant:\n%2\$s";
$definitions["email.privateAdd.subject"] = "Tu a été ajouté à une conversation privée";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> a répondu à la conversation que tu suis : <strong>%2\$s</strong></p><hr>%3\$s<hr><p>Pour voir la nouvelle activité, suivez le lien suivant :<br>%4\$s</p>";
$definitions["email.post.subject"] = "Il y a une nouvelle réponse pour '%1\$s'";


// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "author:";
$definitions["gambit.contributor:"] = "contributor:";
$definitions["gambit.member"] = "member";
$definitions["gambit.myself"] = "myself";
$definitions["gambit.draft"] = "draft";
$definitions["gambit.locked"] = "locked";
$definitions["gambit.order by newest"] = "order by newest";
$definitions["gambit.order by replies"] = "order by replies";
$definitions["gambit.private"] = "private";
$definitions["gambit.random"] = "random";
$definitions["gambit.reverse"] = "reverse";
$definitions["gambit.starred"] = "followed";
$definitions["gambit.muted"] = "muted";
$definitions["gambit.sticky"] = "sticky";
$definitions["gambit.unread"] = "unread";
$definitions["gambit.limit:"] = "limit:";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "active today"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "active 1 day"; // what it actually evaluates to

$definitions["gambit.has replies"] = "has replies";
$definitions["gambit.has >0 replies"] = "has >0 replies";
$definitions["gambit.has >10 replies"] = "has >10 replies";

$definitions["gambit.has no replies"] = "has no replies";
$definitions["gambit.has 0 replies"] = "has 0 replies";

$definitions["gambit.dead"] = "dead";
$definitions["gambit.active >30 day"] = "active >30 day";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "second";
$definitions["gambit.minute"] = "minute";
$definitions["gambit.hour"] = "hour";
$definitions["gambit.day"] = "day";
$definitions["gambit.week"] = "week";
$definitions["gambit.month"] = "month";
$definitions["gambit.year"] = "year";
$definitions["gambit.last"] = "last"; // as in "active last 180 days"
$definitions["gambit.active"] = "active"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.hour"]}s";
$definitions["gambit.active last ? days"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.day"]}s";

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^has *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";
