<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

ET::$languageInfo["French"] = array(
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
$definitions["%d hidden"]  = "%d hidden";
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
$definitions["%s has registered and is awaiting approval."] = "%s has registered and is awaiting approval.";
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

$definitions["A new version of esoTalk (%s) is available."] = "Une nouvelle version de esoTalk (%s) est disponible.";
$definitions["a private conversation"] = "une conversation privée";
$definitions["Automatically follow conversations that I reply to"] = "Suivre automatiquement les conversations auxquelles je réponds";
$definitions["Automatically follow private conversations that I'm added to"] = "Suivre automatiquement les conversations privées auxquelles je suis ajouté";
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
$definitions["All Channels"] = "Toutes les Catégories";
$definitions["Allow members to edit their own posts:"] = "Autoriser les membres à éditer leurs propres posts :";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "Déjà enregistré ? <a href='%s' class='link-login'>Connectez-vous !</a>";
$definitions["Appearance"] = "Apparence";
$definitions["Approve"] = "Approuver";
$definitions["Automatically star conversations that I reply to"] = "Suivre automatiquement une conversation à laquelle je réponds";
$definitions["Avatar"] = "Avatar";

$definitions["Back to channels"] = "Retour aux catégories";
$definitions["Back to conversation"] = "Retour à la conversation";
$definitions["Back to member"] = "Retour à la page membre";
$definitions["Back to members"] = "Retour à la liste des membres";
$definitions["Back to search"] = "Retour à la recherche";
$definitions["Background color"] = "Couleur d'arrière-plan";
$definitions["Background image"] = "Image d'arrière-plan";
$definitions["Base URL"] = "URL de base";
$definitions["Bold"] = "Gras";
$definitions["By %s"] = "Par %s";

$definitions["Can suspend/unsuspend members"] = "Peut suspendre/réactiver des membres";
$definitions["Cancel"] = "Annuler";
$definitions["Change %s's Permissions"] = "Changer les permissions de %s";
$definitions["Change avatar"] = "Changer l'avatar";
$definitions["Change Channel"] = "Changer la Catégorie";
$definitions["Change channel"] = "Changer la catégorie";
$definitions["Change username"] = "Changer l'identifiant";
$definitions["Change Password or Email"] = "Changer de mot de passe ou d'email";
$definitions["Change Password"] = "Changer de Mot de Passe";
$definitions["Change password"] = "Changer de mot de passe";
$definitions["Change permissions"] = "Changer les permissions";
$definitions["Change"] = "Changer";
$definitions["Channel description"] = "Description de la catégorie";
$definitions["Channel List"] = "Liste des catégories";
$definitions["Channel title"] = "Titre de la catégorie";
$definitions["Channel slug"] = "Slug de la catégorie";
$definitions["Channels"] = "Catégories";
$definitions["Choose a Channel"] = "Choisir une catégorie";
$definitions["Choose a secure password of at least %s characters"] = "Choisir un mot de passe sécurisé d'au moins %s caractères.";
$definitions["Choose what people will see when they first visit your forum."] = "Choisir ce que les gens verront en premier lorsqu'ils visiteront le forum.";
$definitions["Click on a member's name to remove them."] = "Cliquez sur le nom d'un membre pour l'enlever.";
$definitions["Close registration"] = "Fermer les inscriptions";
$definitions["Confirm password"] = "Confirmer le mot de passe";
$definitions["Controls"] = "Contrôles";
$definitions["Conversation"] = "Conversation";
$definitions["Conversations participated in"] = "Conversations auxquelles il/elle a participé";
$definitions["Conversations started"] = "Conversations démarrées";
$definitions["Conversations"] = "Conversations";
$definitions["Copy permissions from"] = "Copier les permissions de";
$definitions["Create Channel"] = "Créer une Catégorie";
$definitions["Create Group"] = "Créer un Groupe";
$definitions["Create Member"] = "Créer un Membre";
$definitions["Customize how users can become members of your forum."] = "Choisir comment les utilisateurs peuvent s'enregistrer sur le forum.";
$definitions["Customize your forum's appearance"] = "Choisir l'apparence du forum";

$definitions["Dashboard"] = "Tableau de bord";
$definitions["Default forum language"] = "Langage par défaut du forum";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>Supprimer</strong> définitivement toutes les conversations.";
$definitions["Delete Channel"] = "Supprimer la catégorie";
$definitions["Delete conversation"] = "Supprimer la conversation";
$definitions["Delete member"] = "Supprimer le membre";
$definitions["Delete Member"] = "Supprimer Membre";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>Supprimer les messages de ce membre.</strong> Tous les messages de ce membre seront marqués comme supprimé, mais il sera possible de les restaurer manuellement.";
$definitions["Delete"] = "Supprimer";
$definitions["Deleted %s by %s"] = "Supprimé %s par %s";
$definitions["Deny"] = "Interdire";
$definitions["Disable"] = "Désactiver";
$definitions["Discard"] = "Ignorer";
$definitions["Don't allow other users to see when I am online"] = "Ne pas autoriser les autres utilisateurs à me voir quand je suis en ligne";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "Pas encore inscrit&thinsp;? <a href='%s' class='link-join'>Inscrivez-vous&thinsp;!</a>";
$definitions["Don't repeat"] = "Ne pas répéter";
$definitions["Don't require users to confirm their account"] = "Ne pas forcer les utilisateurs à confirmer leur compte";

$definitions["Edit Channel"] = "Éditer la Catégorie";
$definitions["Edit Group"] = "Éditer le Groupe";
$definitions["Edit member groups"] = "Éditer les groupes";
$definitions["Edit your profile"] = "Éditer votre profil";
$definitions["Edit"] = "Éditer";
$definitions["Edited %s by %s"] = "Édité %s par %s";
$definitions["Editing permissions"] = "Édition des permissions";
$definitions["Email me when I'm added to a private conversation"] = "M'envoyer un email lorsque je suis ajouté à une conversation privée";
$definitions["Email me when someone mentions me in a post"] = "M'envoyer un email lorsque quelqu'un me mentionne dans une conversation";
$definitions["Email me when someone posts in a channel I have followed"] = "M'envoyer un email lorsque quelqu'un poste dans une catégorie que je suis";
$definitions["Email me when someone posts in a conversation I have followed"] = "M'envoyer un email lorsque quelqu'un répond à une conversation que je suis";
$definitions["Email me when there is a new post by a member I have followed"] = "M'envoyer un email lorsque qu'un membre que je suis poste un message";
$definitions["Email"] = "Email";
$definitions["Enable"] = "Activer";
$definitions["Enabled"] = "Activé";
$definitions["Enter a conversation title"] = "Entrer un titre";
$definitions["Error"] = "Erreur";
$definitions["esoTalk version"] = "version de esoTalk";
$definitions["Everyone"] = "Tout le monde";

$definitions["Fatal Error"] = "Oh oh&thinsp;! Une erreur fatale...";
$definitions["Feed"] = "Flux";
$definitions["Filter by name or group..."] = "Filtrer par nom ou par groupe...";
$definitions["Find this post"] = "Trouver ce post";
$definitions["First posted"] = "Premier post";
$definitions["Follow"] = "Suivre";
$definitions["Follow to receive notifications"] = "Suivre pour recevoir des notifications";
$definitions["Following"] = "Suivies";
$definitions["For %s seconds"] = "Pendant %s secondes";
$definitions["Forever"] = "Toujours";
$definitions["Forgot?"] = "Oublié&thinsp;?";
$definitions["Forgot Password"] = "Mot de passe oublié";
$definitions["Forum"] = "Forum";
$definitions["Forum header"] = "En-tête du Forum";
$definitions["Forum language"] = "Langue du Forum";
$definitions["Forum privacy"] = "Confidentialité";
$definitions["Forum Settings"] = "Param. du forum";
$definitions["Forum Statistics"] = "Statistiques du Forum";
$definitions["Forum title"] = "Titre du Forum";
$definitions["forumDescription"] = "%s est un forum à propos de %s, et %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Donner à ce groupe la permission 'Modérer' sur toutes les catégories existantes";
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
$definitions["Guests can view the:"] = "Les non-inscrits peuvent voir :";

$definitions["Header"] = "En-tête";
$definitions["Header color"] = "Couleur d'en-tête";
$definitions["Heads Up!"] = "Heads Up!"; // à traduire
$definitions["hidden"] = "caché";
$definitions["Hide"] = "Cacher";
$definitions["Home page"] = "Accueil";
$definitions["HTML is allowed."] = "HTML autorisé.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "Si vous rencontrez d'autres problèmes ou si vous cherchez juste un peu d'aide pour l'installation, n'hésitez pas à aller voir le <a href='%s'>forum de support esoTalk</a>.";
$definitions["Ignore conversation"] = "Ignorer la conversation";
$definitions["Install esoTalk"] = "Installer esoTalk";
$definitions["Install My Forum"] = "Installer Mon Forum";
$definitions["Installed Languages"] = "Langues installées";
$definitions["Installed Plugins"] = "Plugins installés";
$definitions["Installed plugins"] = "Plugins installés";
$definitions["Installed Skins"] = "Thèmes installés";
$definitions["Installed skins"] = "Thèmes installés";
$definitions["is %s"] = "est %s";

$definitions["Joined"] = "Inscrit";
$definitions["just now"] = "à l'instant";

$definitions["Keep me logged in"] = "Se souvenir de moi"; // me garder connecté ? connexion automatique ?
$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>Garder les posts de ce membre.</strong> Tous les posts de ce membre resteront intacts, mais l'auteur sera marqué comme [supprimé].";

$definitions["label.draft"] = "Brouillon";
$definitions["label.locked"] = "Verrouillé";
$definitions["label.muted"] = "Ignoré";
$definitions["label.private"] = "Privé";
$definitions["label.sticky"] = "Post-it";
$definitions["Labels"] = "Étiquettes";
$definitions["Last active"] = "Dernière activité";
$definitions["Last active %s"] = "Dernière activité %s";
$definitions["Latest"] = "Récents";
$definitions["Latest News"] = "Dernières nouvelles";
$definitions["Loading..."] = "Chargement...";
$definitions["Lock"] = "Verrouiller";
$definitions["Log In"] = "Connexion";
$definitions["Log Out"] = "Déconnexion";

$definitions["Make member and online list visible to:"] = "Rendre la liste des membres et ceux en ligne visible à&thinsp;:";
$definitions["Manage Channels"] = "Gérer les catégories";
$definitions["Manage Groups"] = "Gérer les groupes";
$definitions["Manage Languages"] = "Gérer les langues";
$definitions["Manage your forum's channels (categories)"] = "Gérer les catégories du forum";
$definitions["Mark as read"] = "Marquer comme lu";
$definitions["Mark as unread"] = "Mark comme non lu";
$definitions["Mark all as read"] = "Marquer tout comme lu";
$definitions["Mark listed as read"] = "Marquer la sélection comme lu";
$definitions["Maximum size of %s. %s."] = "Taille maximale de %s. %s.";
$definitions["Member groups"] = "Groupes";
$definitions["Member list"] = "Liste des membres";
$definitions["Member List"] = "Liste des Membres";
$definitions["Member privacy"] = "Vie privée des membres";
$definitions["Members"] = "Membres";
$definitions["Members Allowed to View this Conversation"] = "Membres Autorisés à Voir cette Conversation";
$definitions["Members Awaiting Approval"] = "Membres en attente d'approbation";
$definitions["Members Online"] = "Membres en Ligne";
$definitions["Members who are part of this group can be listed by searching for the group name in the member list."] = "Members who are part of this group can be listed by searching for the group name in the member list.";
$definitions["Mobile skin"] = "Thème mobile";
$definitions["Moderate"] = "Modérer";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>Déplacer</strong> les conversations vers la catégorie&thinsp;:";
$definitions["Mute conversation"] = "Ignorer la conversation";
$definitions["MySQL database"] = "Nom de la base de données MySQL";
$definitions["MySQL host address"] = "Adresse de l'hôte MySQL";
$definitions["MySQL password"] = "Mot de passe MySQL";
$definitions["MySQL queries"] = "Requêtes MySQL";
$definitions["MySQL table prefix"] = "Préfixe de table MySQL";
$definitions["MySQL username"] = "Nom d'utilisateur MySQL";
$definitions["MySQL version"] = "Version de MySQL";

$definitions["Name"] = "Nom";
$definitions["never"] = "jamais";
$definitions["%s new"] = "%s nouveau(x)";
$definitions["New conversation"] = "Nouveau post";
$definitions["New Conversation"] = "Nouveau post";
$definitions["New conversations in the past week"] = "Nouvelles conversations durant la dernière semaine";
$definitions["New email"] = "Nouvel email";
$definitions["New members in the past week"] = "Nouveaux membres durant la dernière semaine";
$definitions["New password"] = "Nouveau mot de passe";
$definitions["New posts in the past week"] = "Nouveaux posts durant la dernière semaine";
$definitions["New username"] = "Nouveau nom d'utilisateur";
$definitions["Next Step"] = "Étape Suivante";
$definitions["Next"] = "Suivant";
$definitions["No preview"] = "Aucun aperçu";
$definitions["No"] = "Non";
$definitions["Notifications"] = "Notifications";
$definitions["Now"] = "À l'instant";

$definitions["OK"] = "OK";
$definitions["Older"] = "Plus ancien";
$definitions["Online"] = "En ligne";
$definitions["online"] = "en ligne";
$definitions["Only allow members of this group to see who else is in it"] = "Autoriser seuls les membres de ce groupe à voir qui d'autre est membre de ce groupe";
$definitions["Open registration"] = "Inscriptions ouvertes";
$definitions["optional"] = "optionnel";
$definitions["Order By:"] = "Trier par&thinsp:";
$definitions["Original Post"] = "Premier Post";

$definitions["Page Not Found"] = "Page Non Trouvée :(";
$definitions["Password"] = "Mot de passe";
$definitions["PHP version"] = "Version de PHP";
$definitions["Plugins"] = "Plugins";
$definitions["Post a Reply"] = "Répondre";
$definitions["Post count"] = "Nombre de posts";
$definitions["Posts"] = "Posts";
$definitions["Powered by"] = "Propulsé par";
$definitions["Preview"] = "Aperçu";
$definitions["Previous"] = "Précédents";
$definitions["Primary color"] = "Couleur dominante";

$definitions["Quote"] = "Citer";
$definitions["quote"] = "citer";

$definitions["Read more"] = "Plus de messages";
$definitions["Recent posts"] = "Posts récents";
$definitions["Recover Password"] = "Réinitialiser le mot de passe";
$definitions["Registered members"] = "Membres enregistrés";
$definitions["Registration"] = "Inscription";
$definitions["Registration Closed"] = "Inscriptions Fermées";
$definitions["Remove avatar"] = "Supprimer l'avatar";
$definitions["Rename Member"] = "Renommer un Membre";
$definitions["Reply"] = "Répondre";
$definitions["Report a bug"] = "Soumettre un bug";
$definitions["Require administrator approval"] = "Forcer l'approbation d'un administrateur";
$definitions["Require users to confirm their email address"] = "Forcer la confirmation des adresses emails";
$definitions["Restore"] = "Restaurer";
$definitions["restore"] = "restaurer";
$definitions["Reset"] = "Réinitialiser";

$definitions["Save Changes"] = "Valider les modifications";
$definitions["Save Draft"] = "Enregistrer le brouillon";
$definitions["Search conversations..."] = "Rechercher des conversations...";
$definitions["Search within this conversation..."] = "Rechercher dans cette conversation...";
$definitions["Search"] = "Rechercher";
$definitions["See the private conversations I've had with %s"] = "Voir les conversations privées que j'ai eu avec %s";
$definitions["Set a New Password"] = "Mettre un nouveau mot de passe";
$definitions["Settings"] = "Paramètres";
$definitions["Show an image in the header"] = "Afficher une image dans l'en-tête";
$definitions["Show in context"] = "Voir dans le contexte";
$definitions["Show matching posts"] = "Voir les posts correspondants";
$definitions["Show the channel list by default"] = "Voir la liste des catégories par défaut";
$definitions["Show the conversation list by default"] = "Voir la liste des conversations par défaut";
$definitions["Show the forum title in the header"] = "Afficher le titre du forum dans l'en-tête";
$definitions["Sign Up"] = "Inscription";
$definitions["Skins"] = "Thèmes";
$definitions["Sort By"] = "Trier par";
$definitions["Specify Setup Information"] = "Renseigner les informations de configuration";
$definitions["Star to receive notifications"] = "Suivre pour recevoir des notifications";
$definitions["Starred"] = "Suivi";
$definitions["Start"] = "Démarrer";
$definitions["Start a conversation"] = "Démarrer une conversation";
$definitions["Start a new conversation"] = "Démarrer une nouvelle conversation";
$definitions["Start a private conversation with %s"] = "Démarrer une conversation privée avec %s";
$definitions["Start Conversation"] = "Démarrer une Conversation";
$definitions["Starting a conversation"] = "Démarrage d'une conversation";
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
$definitions["Success!"] = "Succès !";
$definitions["Suspend member"] = "Suspendre le membre";
$definitions["Suspend members."] = "Suspendre les membres.";
$definitions["Suspend"] = "Suspendre";

$definitions["To get started with your forum, you might like to:"] = "Pour commencer sur votre forum, vous pourriez&thinsp;:"; // :/

$definitions["Unapproved"] = "Non validé";
$definitions["Unhide"] = "Rendre visible"; // révéler ?
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
$definitions["Use for mobile"] = "Utiliser le module pour les mobiles"; // to verify
$definitions["Use friendly URLs"] = "Utiliser des liens racourcis";
$definitions["Used to verify your account and subscribe to conversations"] = "Utilisé pour vérifier la vérification de compte et les abonnements aux conversations";
$definitions["Username"] = "Nom d'utilisateur";
$definitions["Username or Email"] = "Nom d'utilisateur ou Email";

$definitions["View %s's profile"] = "Voir le profil de %s";
$definitions["View all notifications"] = "Voir les notifications";
$definitions["View more"] = "Voir plus";
$definitions["View your profile"] = "Voir votre profil";
$definitions["View"] = "Voir";
$definitions["Viewing: %s"] = "En train de lire : %s";
$definitions["Viewing %s"] = "En train de lire %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> sur %s posts";

$definitions["Warning"] = "Oh oh, quelque chose ne va pas&thinsp;!";
$definitions["Welcome to esoTalk!"] = "Bienvenue sur esoTalk!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."] = "Nous vous avons connecté et emmené directement au panneau d'administration de votre forum. De rien :).";
$definitions["Write a reply..."] = "Écrire une réponse...";

$definitions["Yes"] = "Oui";
$definitions["You can manage channel-specific permissions on the channels page."] = "Vous pouvez changer les permissions propres à une catégorie sur la page des catégories.";
$definitions["Your current password"] = "Mot de passe actuel";


// Messages.
$definitions["message.404"] = "Et zut - la page que vous cherchez ne peut être trouvée&thinsp;! Essayez de revenir à la page précédente et de cliquer sur un autre lien. Ou autre chose.";
$definitions["message.accountNotYetApproved"] = "L'administrateur n'a pas encore approuvé votre compte. La patience est de vertue !";
$definitions["message.ajaxDisconnected"] = "Impossible de communiquer avec le serveur. Patientez quelques secondes et <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>essayez à nouveau</a>, ou <a href='' onclick='window.location.reload();return false'>rafraîchissez la page</a>.";
$definitions["message.ajaxRequestPending"] = "Hey ! On bosse encore sur un truc pour vous&thinsp;! Si vous quittez cette page vous pourriez perdre des changements récents que vous avez fait. Attendez donc un peu, ok&thinsp;?";
$definitions["message.avatarError"] = "Il y a eut un problème durant l'envoi de votre avatar. Assurez-vous d'utiliser un type d'image valide (.jpg, .png, ou .gif) et que le fichier n'est pas trop volumineux.";
$definitions["message.cannotDeleteLastChannel"] = "Eh, attendez un peu, vous ne pouvez pas supprimer la dernière catégorie&thinsp;! Où vont aller vos conversations sinon&thinsp;? Ceci n'est pas possible.";
$definitions["message.cannotEditSinceReply"] = "Vous ne pouvez pas éditer votre message car quelqu'un a répondu depuis que vous l'avez posté.";
$definitions["message.changesSaved"] = "Les changements ont été effectués.";
$definitions["message.channelsHelp"] = "Les Catégories sont utilisées pour classer les conversations. Vous pouvez créer autant de catégories que vous le souhaitez, les réorganiser, et les imbriquer en les déplaçant ci dessous.";
$definitions["message.channelSlugTaken"] = "Ce slug est déjà utilisé par une autre catégorie.";
$definitions["message.confirmDelete"] = "Vous êtes bien sûr de vouloir supprimer&thinsp;? Sérieusement, vous ne pourrez pas le récupérer.";
$definitions["message.confirmDiscardPost"] = "Vous n'avez pas sauvegardé votre post en brouillon. Voulez-vous l'ignorer&nbsp;?";
$definitions["message.confirmEmail"] = "Avant de commencer à utiliser votre nouveau compte, vous devez confirmer votre adresse email. Dans les deux prochaines minutes, vous devriez recevoir un email contenant un lien d'activation.";
$definitions["message.confirmLeave"] = "Woah, vous n'avez pas sauvegardé le message que vous êtes en train d'éditer&thinsp;! Si vous quittez la page, vous perdrez toutes vos modifications. C'est bon, vous êtes sûr&thinsp;?";
$definitions["message.connectionError"] = "esoTalk n'a pu se connecter au serveur MySQL. L'erreur est&thinsp;:<br/>%s";
$definitions["message.conversationDeleted"] = "La conversation a été supprimée. Cool, non&thinsp;?";
$definitions["message.conversationNotFound"] = "Pour une certaine raison cette conversation ne peut être visualisée. Peut-être a-t-elle été supprimée&thinsp;? Ou alors elle est privée, dans ce cas vous devez être déconnecté ou alors vous n'y êtes pas invité. J'espère qu'on ne parle pas de vous dans votre dos&thinsp;!";
$definitions["message.cookieAuthenticationTheft"] = "Pour des raisons de sécurité, on n'a pas pu utiliser votre cookie 'se rappeler de moi'. Connectez-vous manuellement&thinsp;!";
$definitions["message.deleteChannelHelp"] = "Woah, on garde son calme&thinsp;! Si vous supprimez cette catégorie, vous ne pourrez pas revenir en arrière. À moins que vous ne construisiez une machine à voyager dans le temps. Mais bon, Marty, il n'y a aucun moyen <em>facile</em> de le faire. Toutes les conversations de cette catégorie seront déplacées vers une de votre choix.";
$definitions["message.emailConfirmed"] = "Cool&thinsp;! Votre compte a été validé et vous pouvez maintenant commencer à participer aux conversations. Et pourquoi ne pas en <a href='".URL("conversation/start")."'>commencer</a> une vous-même&thinsp;?";
$definitions["message.emailDoesntExist"] = "Cette adresse email ne correspond à aucun membre. Vous ne vous seriez pas trompé&thinsp;?";
$definitions["message.emailNotYetConfirmed"] = "Vous devez confirmer votre adresse email avant de pouvoir vous connecter avec&thinsp;! Si vous n'avez pas encore reçu d'email de validation, <a href='%s'>cliquez ici pour qu'on vous en renvoit un autre</a>.";
$definitions["message.emailTaken"] = "Malédiction, il y a déjà un membre avec cette adresse email&thinsp;!";
$definitions["message.empty"] = "Vous devez remplir ce champ.";
$definitions["message.emptyPost"] = "Youpi... euh, vous devriez peut-être taper quelque chose dans votre message, non&thinsp;?";
$definitions["message.emptyTitle"] = "Le titre de votre conversation ne peut pas être vide. Sinon, comment les gens vont pouvoir cliquer sur du vide&thinsp;? Pensez-y.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk est déjà installé.</strong><br/><small>Pour le réinstaller, vous devez supprimer <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "Une nouvelle version de esoTalk, %s, est dispo.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "Il est recommandé de toujours avoir la dernière version installée pour réduire les risques de sécurité. Et puis, il y a peut-être des nouvelles fonctionnalités sympas&thinsp;!";
$definitions["message.esoTalkUpToDate"] = "Cette version de esoTalk est à jour.";
$definitions["message.esoTalkUpToDateHelp"] = "Je suis un pauvre étudiant d'université qui a passé des centaines d'heures de développement sur esoTalk. Si vous l'aimez, pensez à faire un <a href='%s' target='_blank'>don</a> s'il vous plaît.";
$definitions["message.fatalError"] = "<p>esoTalk a rencontré une méchante erreur qui rend impossible de faire ce que vous tentez de faire. Mais ne vous en faites pas - <strong>voici quelques trucs que vous pouvez essayer</strong>&thinsp;:</p>\n<ul>\n<li>Allez dehors, promenez le chien, prenez un café... et puis <strong><a href='%1\$s'>réessayez</a></strong>!</li>\n<li>Si vous êtes administrateur du forum, vous pouvez aller faire un tour sur le <a href='%2\$s'>site de esoTalk</a></strong>.</li>\n<li>Frapper l'ordinateur - &Ccedil;a marche parfois pour moi.</li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Quelque chose a mal tourné et le fichier que vous avez sélectionné ne peut être envoyé. Il est peut être trop volumineux ou dans un format invalide&thinsp;?";
$definitions["message.fileUploadFailedMove"] = "Le fichier que vous avez envoyé ne peut être remis à destination. Contactez l'administrateur du forum.";
$definitions["message.fileUploadNotImage"] = "Le fichier que vous tentez d'envoyer n'est pas dans un format d'image accepté.";
$definitions["message.fileUploadTooBig"] = "Le fichier selectionné ne peut être envoyé car il est trop volumineux.";
$definitions["message.forgotPasswordHelp"] = "Alors comme ça vous avez oublié votre mot de passe&thinsp;? Ne vous inquiètez pas, ça m'arrive tout le temps. Renseignez juste votre adresse email et nous allons vous envoyer les instructions pour en créer un nouveau.";
$definitions["message.fulltextKeywordWarning"] = "Information&thinsp;: les mots de moins de 4 caractères et les mots anglais commun tel que 'the' et 'for', sont ignorés lors de la recherche.";
$definitions["message.gambitsHelp"] = "Les Gambits sont des phrases qui décrivent ce que vous cherchez. Cliquez sur un gambit pour l'insérer dans le champ de recherche. Double-cliquez pour chercher immédiatement. Les mot-clés habituels fonctionnent aussi&thinsp;!";
$definitions["message.gdNotEnabledWarning"] = "L'<strong>extension GD</strong> n'est pas activée.<br/><small>C'est obligatoire pour enregistrer les avatars. Demandez à votre hébergeur ou administrateur de l'installer/activer.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "<strong>MySQL 4 ou supérieur</strong> doit être installé et <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>l'extension MySQL activée dans PHP</a>.<br/><small>Installez-le ou demandez à votre hébergeur/administreur de le faire.</small>";
$definitions["message.greaterPHPVersionRequired"] = "<strong>PHP 5.0.0 ou supérieur</strong> doit être installé pour faire tourner esoTalk.<br/><small>Mettez à jour votre installation PHP ou faites la demande auprès de votre hébergeur ou administrateur.</small>";
$definitions["message.groupsHelp"] = "Les groupes sont utilisés pour catégoriser les membres sur votre forum. Vous pouvez créer autant de groupes que vous voulez";
$definitions["message.incorrectLogin"] = "Indentifiants invalides.";
$definitions["message.incorrectPassword"] = "Mot de passe actuel invalide.";
$definitions["message.installerAdminHelp"] = "esoTalk utilisera ces informations pour configurer le compte administrateur du forum.";
$definitions["message.installerFilesNotWritable"] = "esoTalk ne peut écrire dans les fichiers/dossiers suivants&thinsp;: <strong>%s</strong>.<br/><small>Pour résoudre le problème, vous devez utiliser un client FTP et <strong>chmod 777</strong> sur ceux ci.</small>";
$definitions["message.installerWelcome"] = "<p>Bienvenue dans l'installeur esoTalk&thinsp;! On a besoin de certaines informations pour configurer le forum.</p>\n<p>Si vous avez besoin d'aide, rendez-vous sur le <a href='%s'>forum de support d'esoTalk</a>.</p>";
$definitions["message.invalidChannel"] = "Vous avez selectionné une catégorie incorrecte&thinsp;!";
$definitions["message.invalidEmail"] = "Il semble que cet email n'est pas valide...";
$definitions["message.invalidUsername"] = "Vous devez choisir un nom d'utilisateur avec entre 3 et 20 caractères alphanumériques.";
$definitions["message.javascriptRequired"] = "Cette page nécessite JavaScript pour fonctionner correctement.";
$definitions["message.languageUninstalled"] = "Le pack de langue a été installé.";
$definitions["message.locked"] = "Hm, Il semble que cette conversation soit <strong>vérouillée</strong>, vous ne pouvez donc pas y répondre.";
$definitions["message.loginToParticipate"] = "Pour démarrer une conversation ou répondre à des message, connectez-vous.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Se connecter</a> ou <a href='%2\$s' class='link-join'>S'inscrire</a> pour répondre&thinsp;!";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Se connecter</a> pour afficher certaines catégories qui peuvent être cachées aux invités.";
$definitions["message.memberNotFound"] = "Hm, il n'y a personne de ce nom là ici.";
$definitions["message.memberNoPermissionView"] = "Ce membre ne peut pas être ajouté car il n'a pas la permission de voir la catégorie dans laquelle se trouve cette conversation.";
$definitions["message.nameTaken"] = "Le nom entré est pris ou est un mot réservé.";
$definitions["message.newSearchResults"] = "Il s'est passé des choses depuis votre recherche. <a href='%s'>Rafraîchir</a>";
$definitions["message.noActivity"] = "%s n'a encore rien fait sur ce forum&thinsp;!";
$definitions["message.noChannels"] = "Aucune catégorie visible.";
$definitions["message.noMembersOnline"] = "Aucun membre en ligne actuellement.";
$definitions["message.noNotifications"] = "Vous n'avez pas de notification.";
$definitions["message.noPermission"] = "Boo&thinsp;! Vous n'avez pas la permission de faire cette action.";
$definitions["message.noPermissionToReplyInChannel"] = "Vous n'avez pas la permission de répondre aux conversations de cette catégorie.";
$definitions["message.noPluginsInstalled"] = "Aucun plugin n'est installé actuellement.";
$definitions["message.noSearchResults"] = "Auncune conversation correspondante à la recherche n'a été trouvée.";
$definitions["message.noSearchResultsMembers"] = "Aucun membre correspondant à la recherche.";
$definitions["message.noSearchResultsPosts"] = "Aucun message correspondant à la recherche.";
$definitions["message.noSkinsInstalled"] = "Aucun thème n'est actuellement installé.";
$definitions["message.notWritable"] = "<code>%s</code> n'est pas modifiable. Tentez <code>chmod 777</code>, ou s'il n'existe pas, <code>chmod</code> le dossier qui le contient.";
$definitions["message.pageNotFound"] = "La page demandée ne peut être trouvée.";
$definitions["message.passwordChanged"] = "C'est bon, votre mot de passe a été changé. Vous pouvez vous connecter&thinsp;! Essayez de vous en souvenir cette fois-ci.";
$definitions["message.passwordEmailSent"] = "Ok, on a envoyé un email contenant un lien pour réinialiser votre mot de passe. Vérifiez votre dossier spam si jamais vous ne le recevez pas dans les minutes qui viennent. Et oui parfois on nous traite comme du spam - Vous y croyez, vous&thinsp;?";
$definitions["message.passwordsDontMatch"] = "Votre mot de passe ne correspond pas.";
$definitions["message.passwordTooShort"] = "Votre mot de passe est trop court.";
$definitions["message.pluginCannotBeEnabled"] = "Le plugin <em>%s</em> ne peut pas être activé&thinsp;: %s";
$definitions["message.pluginDependencyNotMet"] = "Pour activer ce plugin, la version %s %s doit être installée et activée.";
$definitions["message.pluginUninstalled"] = "Le plugin a été désintallé.";
$definitions["message.postNotFound"] = "Le message est introuvable.";
$definitions["message.postTooLong"] = "Votre message est vraiment, vraiment long&thinsp;! Trop long&thinsp;! La taille maximale autorisée pour un message est de %s. Et c'est déjà très long&thinsp;!";
$definitions["message.preInstallErrors"] = "Les erreurs suivantes sont apparues dans votre installation. Elles doivent être corrigées avant de poursuivre l'installation.";
$definitions["message.preInstallWarnings"] = "Les erreurs suivantes sont apparues dans votre installation. Vous pouvez les ignorer mais esoTalk ne fonctionnera peut-être pas correctement.";
$definitions["message.reduceNumberOfGambits"] = "Réduisez le nombre de gambits ou mot-clés pour élargir le nombre de résultats.";
$definitions["message.registerGlobalsWarning"] = "Le paramètrage des <strong>register_globals</strong> de PHP est activé.<br/><small>Bien que esoTalk fonctionne avec cette option d'activée, il est recommandé qu'elle soit désactivée pour augmenter la sécurité et empêcher des problèmes que peut avoir esoTalk.</small>";
$definitions["message.registrationClosed"] = "L'inscription sur ce forum n'est pas ouverte au public.";
$definitions["message.removeDirectoryWarning"] = "Hey&thinsp;! On dirait que vous n'avez pas supprimé le répertoire <code>%s</code> comme on vous l'a dit&thinsp;! Vous devriez le faire, juste pour être sur de ne pas rendre la tâche trop simple à ces crackers.";
$definitions["message.safeModeWarning"] = "Le <strong>mode sans échec</strong> est activé.<br/><small>Cela peut potentiellement causer des problemes sur esoTalk, mais vous pouvez toujours continuer si vous ne pouvez pas le désactiver.</small>";
$definitions["message.searchAllConversations"] = "Essayer de chercher ces termes dans toutes les conversations.";
$definitions["message.setNewPassword"] = "Bien&thinsp;! Maintenant, quel mot de passe souhaitez-vous choisir&thinsp;? Pas le nom de votre chat, j'espère...";
$definitions["message.skinUninstalled"] = "Le thème a été désinstallé";
$definitions["message.suspended"] = "Aïe&thinsp;! Un modérateur a <strong>suspendu</strong> votre compte. Ça craint, mais jusqu'à ce que la suspension soit levée, vous ne pouvez plus faire grand chose ici. Ouais, on les emmerde&thinsp;!";
$definitions["message.suspendMemberHelp"] = "Suspendre %s les empèchera de répondre aux conversations, en commencer de nouvelles et voir les conversations privées. Ils seront traités comme de simples invités.";
$definitions["message.tablePrefixConflict"] = "L'installeur a detecté une autre installation de EsoTalk sur la même base de données avec le même préfixe.<br/>Pour écraser cette installation de esoTalk, cliquez sur 'Installer mon forum' encore une fois. <strong>Toutes les données seront perdues.</strong><br/>Si vous souhaitez créer une installation en parallèle, <strong>changez le prefix des tables</strong>.";
$definitions["message.unsuspendMemberHelp"] = "Supprimer la suspension de %s les autorisera à participer aux conversations du forum à nouveau.";
$definitions["message.upgradeSuccessful"] = "esoTalk a été mis à jour avec succès.";
$definitions["message.waitForApproval"] = "Avant de commencer à utiliser votre nouveau compte, un administrateur doit l'approuver. Nous vous enverrons un email quand vous serez accepté&nbsp;!";
$definitions["message.waitToReply"] = "Vous devez attendre au moins %s secondes entre chaque message. Respirez un grand coup et réessayez.";
$definitions["message.waitToSearch"] = "Hop hop hop, on se calme&thinsp;! On dirait que vous tentez un peu trop de recherches. Attendez %s secondes et réessayez.";


// Emails.
$definitions["email.header"] = "<p>Salut %s&thinsp;!</p>";
$definitions["email.footer"] = "<p>(Si vous ne voulez plus recevoir ce genre d'emails, vous pouvez <a href='%s'>changez vos préférences de notification</a>.)</p>";

$definitions["email.confirmEmail.subject"] = "%1\$s, confirmation d'adresse email";
$definitions["email.confirmEmail.body"] = "Quelqu'un (sûrement vous&thinsp;!) s'est inscrit sur le forum '%1\$s' avec cette adresse email.\n\nSi c'est bien vous, visitez le lien suivant et votre compte sera activé&thinsp;:\n%2\$s";

$definitions["email.approved.subject"] = "%1\$s, votre compte a été approuvé";
$definitions["email.approved.body"] = "<p>Votre compte sur %1\$s a été approuvé.</p><p>Visitez le lien suivant pour vous connecter et commencer à discuter&nbsp;:<br>%2\$s</p>";

$definitions["email.forgotPassword.subject"] = "Mot de passe oublié, %1\$s&thinsp;?";
$definitions["email.forgotPassword.body"] = "Quelqu'un (avec un peu de chance c'est vous&thinsp;!) a soumit une requête de mot de passe oublié pour votre compte sur le forum '%1\$s'. Si vous ne souhaitez pas changer de mot de passe, ignorez simplement cet email et rien ne changera.\n\nCependant, si vous avez vraiment oublié votre mot de passe et que vous souhaitez en choisir un nouveau, rendez-vous ici&thinsp;:\n%2\$s";

$definitions["email.mention.subject"] = "[Mentionné par %1\$s] %2\$s";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> vous a mentionné dans un post dans la conversation <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>Pour voir le post, cliquez sur le lien suivant&nbsp;:<br>%4\$s</p>";

$definitions["email.privateAdd.subject"] = "[Privée] %1\$s";
$definitions["email.privateAdd.body"] = "<p>Vous avez été ajouté à une conversation privée intitulée <strong>'%1\$s'</strong>.<p><hr/>%2\$s<hr/><p>Pour voir cette conversation, suivez le lien suivant&thinsp;:<br/>%3\$s</p>";

$definitions["email.post.subject"] = "[Nouvelle réponse] %1\$s";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> a répondu à la conversation que vous suivez&thinsp;: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>Pour voir la nouvelle activité, suivez le lien suivant&thinsp;:<br>%4\$s</p>";


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
$definitions["gambit.ignored"] = "ignored";
$definitions["gambit.sticky"] = "sticky";
$definitions["gambit.unread"] = "unread";
$definitions["gambit.limit:"] = "limit:";
$definitions["gambit.title:"] = "title:";

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
$definitions["gambit.active"] = "actif"; // as in "active last 180 days"

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
$definitions["gambit.gambitHasNReplies"] = "/^a *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";
