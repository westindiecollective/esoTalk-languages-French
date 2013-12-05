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

$definitions["Name"] = "Name";
$definitions["never"] = "never";
$definitions["%s new"] = "%s new";
$definitions["New conversation"] = "New conversation";
$definitions["New Conversation"] = "New Conversation";
$definitions["New conversations in the past week"] = "New conversations in the past week";
$definitions["New email"] = "New email";
$definitions["New members in the past week"] = "New members in the past week";
$definitions["New password"] = "New password";
$definitions["New posts in the past week"] = "New posts in the past week";
$definitions["New username"] = "New username";
$definitions["Next Step"] = "Next Step";
$definitions["Next"] = "Next";
$definitions["No preview"] = "No preview";
$definitions["No"] = "No";
$definitions["Notifications"] = "Notifications";
$definitions["Now"] = "Now";

$definitions["OK"] = "OK";
$definitions["Online"] = "Online";
$definitions["online"] = "online";
$definitions["Open registration"] = "Open registration";
$definitions["optional"] = "optional";
$definitions["Order By:"] = "Order By:";
$definitions["Original Post"] = "Original Post";

$definitions["Page Not Found"] = "Page Not Found";
$definitions["Password"] = "Password";
$definitions["PHP version"] = "PHP version";
$definitions["Plugins"] = "Plugins";
$definitions["Post a Reply"] = "Post a Reply";
$definitions["Post count"] = "Post count";
$definitions["Posts"] = "Posts";
$definitions["Preview"] = "Preview";
$definitions["Previous"] = "Previous";

$definitions["Quote"] = "Quote";
$definitions["quote"] = "quote";

$definitions["Read more"] = "Read more";
$definitions["Recent posts"] = "Recent posts";
$definitions["Recover Password"] = "Recover Password";
$definitions["Registered members"] = "Registered members";
$definitions["Registration"] = "Registration";
$definitions["Remove avatar"] = "Remove avatar";
$definitions["Rename Member"] = "Rename Member";
$definitions["Reply"] = "Reply";
$definitions["Report a bug"] = "Report a bug";
$definitions["Require users to confirm their email address"] = "Require users to confirm their email address";
$definitions["Restore"] = "Restore";
$definitions["restore"] = "restore";
$definitions["Reset"] = "Reset";

$definitions["Save Changes"] = "Save Changes";
$definitions["Save Draft"] = "Save Draft";
$definitions["Search conversations..."] = "Search conversations...";
$definitions["Search within this conversation..."] = "Search within this conversation...";
$definitions["Search"] = "Search";
$definitions["See the private conversations I've had with %s"] = "See the private conversations I've had with %s";
$definitions["Set a New Password"] = "Set a New Password";
$definitions["Settings"] = "Settings";
$definitions["Show an image in the header"] = "Show an image in the header";
$definitions["Show matching posts"] = "Show matching posts";
$definitions["Show the channel list by default"] = "Show the channel list by default";
$definitions["Show the conversation list by default"] = "Show the conversation list by default";
$definitions["Show the forum title in the header"] = "Show the forum title in the header";
$definitions["Sign Up"] = "Sign Up";
$definitions["Skins"] = "Skins";
$definitions["Specify Setup Information"] = "Specify Setup Information";
$definitions["Star to receive notifications"] = "Follow to receive notifications";
$definitions["Starred"] = "Following";
$definitions["Start"] = "Start";
$definitions["Start a conversation"] = "Start a conversation";
$definitions["Start a new conversation"] = "Start a new conversation";
$definitions["Start a private conversation with %s"] = "Start a private conversation with %s";
$definitions["Start Conversation"] = "Start Conversation";
$definitions["Starting a conversation"] = "Starting a conversation";
$definitions["Statistics"] = "Statistics";
$definitions["statistic.conversation.plural"] = "%s conversations";
$definitions["statistic.conversation"] = "%s conversation";
$definitions["statistic.member.plural"] = "%s members";
$definitions["statistic.member"] = "%s member";
$definitions["statistic.online.plural"] = "%s online";
$definitions["statistic.online"] = "%s online";
$definitions["statistic.post.plural"] = "%s posts";
$definitions["statistic.post"] = "%s post";
$definitions["Sticky"] = "Sticky";
$definitions["Subscribe"] = "Subscribe";
$definitions["Subscribed"] = "Subscribed";
$definitions["Subscription"] = "Subscription";
$definitions["Suspend member"] = "Suspend member";
$definitions["Suspend members."] = "Suspend members.";
$definitions["Suspend"] = "Suspend";

$definitions["To get started with your forum, you might like to:"] = "To get started with your forum, you might like to:";

$definitions["Unhide"] = "Unhide";
$definitions["Uninstall"] = "Uninstall";
$definitions["Unlock"] = "Unlock";
$definitions["Unmute conversation"] = "Unmute conversation";
$definitions["Unstarred"] = "Not following";
$definitions["Unsticky"] = "Unsticky";
$definitions["Unsubscribe new users by default"] = "Unsubscribe new users by default";
$definitions["Unsubscribe"] = "Unsubscribe";
$definitions["Unsubscribed"] = "Unsubscribed";
$definitions["Unsuspend member"] = "Unsuspend member";
$definitions["Unsuspend"] = "Unsuspend";
$definitions["Until someone replies"] = "Until someone replies";
$definitions["Untitled conversation"] = "Untitled conversation";
$definitions["Upgrade esoTalk"] = "Upgrade esoTalk";
$definitions["Use a background image"] = "Use a background image";
$definitions["Use for mobile"] = "Use for mobile";
$definitions["Use friendly URLs"] = "Use friendly URLs";
$definitions["Used to verify your account and subscribe to conversations"] = "Used to verify your account and subscribe to conversations";
$definitions["Username"] = "Username";
$definitions["Username or Email"] = "Username or Email";

$definitions["View %s's profile"] = "View %s's profile";
$definitions["View all notifications"] = "View all notifications";
$definitions["View more"] = "View more";
$definitions["View your profile"] = "View your profile";
$definitions["View"] = "View";
$definitions["Viewing: %s"] = "Viewing: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> of %s posts";

$definitions["Warning"] = "Uh oh, something's not right!";
$definitions["Welcome to esoTalk!"] = "Welcome to esoTalk!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."] = "We've logged you in and taken you straight to your forum's administration panel. You're welcome.";
$definitions["Write a reply..."] = "Write a reply...";

$definitions["Yes"] = "Yes";
$definitions["You can manage channel-specific permissions on the channels page."] = "You can manage channel-specific permissions on the channels page.";
$definitions["Your current password"] = "Your current password";


// Messages.
$definitions["message.404"] = "Mince alors - la page que vous avez demandé n'a pas pu être trouvée! Essayez de retourner en arrière et de cliquer sur un autre lien. Ou autre chose.";
$definitions["message.ajaxDisconnected"] = "Incapable de communiquer avec le serveur. Attendez quelques secondes et <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>essayez encore</a>, ou <a href='' onclick='window.location.reload();return false'>actualisez la page</a>.";
$definitions["message.ajaxRequestPending"] = "Hey! On est toujours en train de traiter certaines de vos données! Si vous changez de page vous pourriez perdre vos changements récents. Attendez donc quelques secondes, d'accord?";
$definitions["message.avatarError"] = "There was a problem uploading your avatar. Make sure you're using a valid image type (like .jpg, .png, or .gif) and the file isn't really really huge.";
$definitions["message.cannotDeleteLastChannel"] = "Hey, mais attendez, vous ne pouvez pas supprimer le dernier canal! Où iraient vos conversations? C'est juste bête.";
$definitions["message.changesSaved"] = "Vos changements ont été sauvegardés.";
$definitions["message.channelsHelp"] = "Channels are used to categorize conversations on your forum. You can create as many channels as needed, and rearrange/nest them by dragging and dropping below.";
$definitions["message.channelSlugTaken"] = "This slug is already in use by another channel.";
$definitions["message.confirmDelete"] = "Are you sure you want to delete this? Seriously, you won't be able to get it back.";
$definitions["message.confirmDiscardReply"] = "You have not saved your reply as a draft. Do you wish to discard it?";
$definitions["message.confirmEmail"] = "Before you can start using your newly-created account, you'll need to confirm your email address. Within the next minute or two you should receive an email from us containing a link to activate your account.";
$definitions["message.confirmLeave"] = "Woah, you haven't saved the stuff you are editing! If you leave this page, you'll lose any changes you've made. Is this ok?";
$definitions["message.connectionError"] = "esoTalk could not connect to the MySQL server. The error returned was:<br/>%s";
$definitions["message.conversationDeleted"] = "The conversation was deleted. Didn't that feel good?";
$definitions["message.conversationNotFound"] = "For some reason this conversation cannot be viewed. It may not exist, or you may not have permission to view it.";
$definitions["message.cookieAuthenticationTheft"] = "For security reasons, we couldn't log you in with your 'remember me' cookie. Please log in manually!";
$definitions["message.deleteChannelHelp"] = "Woah, hold up there! If you delete this channel, there'll be no way to get it back. Unless you build a time machine. But, uh, there'll be no <em>easy</em> way to get it back. All of the conversations in this channel can be moved to another of your choice.";
$definitions["message.emailConfirmed"] = "Cool! Your account has been validated and you can now start participating in conversations. Why not <a href='".URL("conversation/start")."'>start one</a> yourself?";
$definitions["message.emailDoesntExist"] = "That email address doesn't match any members in the database. Did you make a typo?";
$definitions["message.emailNotYetConfirmed"] = "You need to confirm your email before you can log in with it! If you didn't receive the confirmation email, <a href='%s'>click here to get it sent again</a>.";
$definitions["message.emailTaken"] = "Curses, there is already a member with this email!";
$definitions["message.empty"] = "You must fill out this field.";
$definitions["message.emptyPost"] = "Yeah... uh, you should probably type something in your post.";
$definitions["message.emptyTitle"] = "The title of your conversation can't be blank. I mean, how can anyone click on a blank title? Think about it.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk is already installed.</strong><br/><small>To reinstall esoTalk, you must remove <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "A new version of esoTalk, %s, is now available.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "It's recommended to always have the latest version of esoTalk installed to reduce security risk. And hey, there might be some cool new features!";
$definitions["message.esoTalkUpToDate"] = "Your version of esoTalk is up-to-date.";
$definitions["message.esoTalkUpToDateHelp"] = "I'm a poor college student who has spent many hundreds of hours developing esoTalk. If you like it, please consider <a href='%s' target='_blank'>donating</a>.";
$definitions["message.fatalError"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li>Go outside, walk the dog, have a coffee... then <strong><a href='%1\$s'>try again</a></strong>!</li>\n<li>If you are the forum administrator, then you can <strong>get help on the <a href='%2\$s'>esoTalk website</a></strong>.</li>\n<li>Try hitting the computer - that sometimes works for me.</li>\n</ul>";
$definitions["message.fatalErrorInstaller"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Go back and check your settings.</strong> In particular, make sure your database information is correct.</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fatalErrorUpgrader"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Something went wrong and the file you selected could not be uploaded. Perhaps it's too big, or in the wrong format?";
$definitions["message.fileUploadFailedMove"] = "The file you uploaded could not be copied to its destination. Please contact the forum administrator.";
$definitions["message.fileUploadNotImage"] = "The file you uploaded is not an image in an acceptable format.";
$definitions["message.fileUploadTooBig"] = "The file you selected could not be uploaded because it is too big.";
$definitions["message.forgotPasswordHelp"] = "So, you forgot your password! Don't worry, it happens all the time. Simply enter your email address and we'll send you instructions on how to set up a new one.";
$definitions["message.fulltextKeywordWarning"] = "Note that keywords less than 4 characters in length, and common English words such as 'the' and 'for', aren't included in the search criteria.";
$definitions["message.gambitsHelp"] = "Gambits are phrases that describe what you are looking for. Click on a gambit to insert it into the search field. Double-click on a gambit to instantly search for it. Normal search keywords work too!";
$definitions["message.gdNotEnabledWarning"] = "The <strong>GD extension</strong> is not enabled.<br/><small>This is required to resize and save avatars. Get your host or administrator to install/enable it.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "You must have <strong>MySQL 4 or greater</strong> installed and the <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL extension enabled in PHP</a>.<br/><small>Please install/upgrade both of these requirements or request that your host or administrator install them.</small>";
$definitions["message.greaterPHPVersionRequired"] = "Your server must have <strong>PHP 5.0.0 or greater</strong> installed to run esoTalk.<br/><small>Please upgrade your PHP installation or request that your host or administrator upgrade the server.</small>";
$definitions["message.incorrectLogin"] = "Your login details were incorrect.";
$definitions["message.incorrectPassword"] = "Your current password is incorrect.";
$definitions["message.installerAdminHelp"] = "esoTalk will use the following information to set up your administrator account on your forum.";
$definitions["message.installerFilesNotWritable"] = "esoTalk cannot write to the following files/folders: <strong>%s</strong>.<br/><small>To resolve this, you must navigate to these files/folders in your FTP client and <strong>chmod</strong> them to <strong>777</strong>.</small>";
$definitions["message.installerMySQLHelp"] = "esoTalk needs access to a MySQL database to store all your forum's data in, such as conversations and posts. If you're unsure of any of these details, you may need to ask your hosting provider.";
$definitions["message.installerWelcome"] = "<p>Welcome to the esoTalk installer! We need a few details from you so we can get your forum set up and ready to go.</p>\n<p>If you have any trouble, get help on the <a href='%s'>esoTalk support forum</a>.</p>";
$definitions["message.invalidChannel"] = "You selected an invalid channel!";
$definitions["message.invalidEmail"] = "Seems this email address isn't valid...";
$definitions["message.invalidUsername"] = "You must choose a username between 3 and 20 alphanumeric characters.";
$definitions["message.javascriptRequired"] = "This page requires JavaScript to function properly. Please enable it!";
$definitions["message.languageUninstalled"] = "The language was uninstalled.";
$definitions["message.locked"] = "Hm, looks like this conversation is <strong>locked</strong>, so you can't reply to it.";
$definitions["message.loginToParticipate"] = "To start conversations or reply to posts, please log in.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Log In</a> or <a href='%2\$s' class='link-join'>Sign Up</a> to reply!";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Log in</a> to expose some channels/conversations that may be hidden to guests.";
$definitions["message.memberNotFound"] = "Hm, there doesn't seem to be a member with that name.";
$definitions["message.memberNoPermissionView"] = "That member can't be added because they don't have permission to view the channel that this conversation is in.";
$definitions["message.nameTaken"] = "The name you have entered is taken or is a reserved word.";
$definitions["message.newSearchResults"] = "There has been new activity that has affected your search results. <a href='%s'>Refresh</a>";
$definitions["message.noActivity"] = "%s hasn't done anything on this forum yet!";
$definitions["message.noMembersOnline"] = "No members are currently online.";
$definitions["message.noNotifications"] = "You have no notifications.";
$definitions["message.noPermission"] = "You do not have permisssion to perform this action.";
$definitions["message.noPermissionToReplyInChannel"] = "You don't have permission to reply to conversations in this channel.";
$definitions["message.noPluginsInstalled"] = "No plugins are currently installed.";
$definitions["message.noSearchResults"] = "No conversations matching your search were found.";
$definitions["message.noSearchResultsMembers"] = "No members matching your search were found.";
$definitions["message.noSearchResultsPosts"] = "No posts matching your search were found.";
$definitions["message.noSkinsInstalled"] = "No skins are currently installed.";
$definitions["message.notWritable"] = "<code>%s</code> is not writeable. Try <code>chmod</code>ing it to <code>777</code>, or if it doesn't exist, <code>chmod</code> the folder it is contained within.";
$definitions["message.pageNotFound"] = "The page you're looking for could not be found.";
$definitions["message.passwordChanged"] = "Alright, your password has been changed. Now you can log in! Hey, try not to forget it again, OK?";
$definitions["message.passwordEmailSent"] = "Ok, we've sent you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two. Yeah, some times we get put through to spam - can you believe it?!";
$definitions["message.passwordsDontMatch"] = "Your passwords do not match.";
$definitions["message.passwordTooShort"] = "Your password is too short.";
$definitions["message.pluginCannotBeEnabled"] = "The plugin <em>%s</em> cannot be enabled: %s";
$definitions["message.pluginDependencyNotMet"] = "To enable this plugin, you must have %s version %s installed and enabled.";
$definitions["message.pluginUninstalled"] = "The plugin was uninstalled.";
$definitions["message.postNotFound"] = "The post you're looking for could not be found.";
$definitions["message.postTooLong"] = "Your post is really, really long! Too long! The maximum number of characters allowed is %s. That's really long!";
$definitions["message.preInstallErrors"] = "The following errors were found with your esoTalk setup. They must be resolved before you can continue the installation.";
$definitions["message.preInstallWarnings"] = "The following errors were found with your esoTalk setup. You can continue the esoTalk install without resolving them, but some esoTalk functionality may be limited.";
$definitions["message.reduceNumberOfGambits"] = "Reduce the number of gambits or search keywords you're using to find a broader range of conversations.";
$definitions["message.registerGlobalsWarning"] = "PHP's <strong>register_globals</strong> setting is enabled.<br/><small>While esoTalk can run with this setting on, it is recommended that it be turned off to increase security and to prevent esoTalk from having problems.</small>";
$definitions["message.registrationClosed"] = "Registration on this forum is not open to the public.";
$definitions["message.removeDirectoryWarning"] = "Hey! Looks like you haven't deleted the <code>%s</code> directory like we told you to! You probably should, just to make sure those hackers can't do anything naughty.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode</strong> is enabled.<br/><small>This could potentially cause problems with esoTalk, but you can still proceed if you cannot turn it off.</small>";
$definitions["message.searchAllConversations"] = "Try searching for this term across all conversations.";
$definitions["message.setNewPassword"] = "Alright! Now, what do you want your new password to be?";
$definitions["message.skinUninstalled"] = "The skin was uninstalled.";
$definitions["message.suspended"] = "Ouch! A forum moderator has <strong>suspended</strong> your account. It sucks, but until the suspension is lifted you won't be able to do much around here. Hey, screw them!";
$definitions["message.suspendMemberHelp"] = "Suspending %s will prevent them from replying to conversations, starting conversations, and viewing private conversations. They will effectively have the same permissions as a guest.";
$definitions["message.tablePrefixConflict"] = "The installer has detected that there is another installation of esoTalk in the same MySQL database with the same table prefix.<br/>To overwrite this installation of esoTalk, click 'Install My Forum' again. <strong>All data will be lost.</strong><br/>If you wish to create another esoTalk installation alongside the existing one, <strong>change the table prefix</strong>.";
$definitions["message.unsuspendMemberHelp"] = "Unsuspending %s will enable them to participate in conversations on this forum again.";
$definitions["message.upgradeSuccessful"] = "esoTalk was successfully upgraded.";
$definitions["message.waitToReply"] = "You must wait at least %s seconds between starting or replying to conversations. Take a deep breath and try again.";
$definitions["message.waitToSearch"] = "Woah, slow down! Looks like you're trying to perform a few too many searches. Wait %s seconds and try again.";


// Emails.
$definitions["email.confirmEmail.body"] = "<p>Someone (hopefully you!) has signed up to the forum '%1\$s' with this email address.</p><p>If this was you, simply visit the following link and your account will be activated:<br>%2\$s</p>";
$definitions["email.confirmEmail.subject"] = "%1\$s, please confirm your email address";
$definitions["email.footer"] = "<p>(If you don't want to receive any emails like this again, you can <a href='%s'>change your notification preferences</a>.)</p>";
$definitions["email.forgotPassword.body"] = "<p>Someone (hopefully you!) has submitted a forgotten password request for your account on the forum '%1\$s'. If you do not wish to change your password, just ignore this email and nothing will happen.</p><p>However, if you did forget your password and wish to set a new one, visit the following link:<br>%2\$s</p>";
$definitions["email.forgotPassword.subject"] = "Did you forget your password, %1\$s?";
$definitions["email.header"] = "<p>Hey %s!</p>";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> mentioned you in a post in the conversation <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>To view the post in context, check out the following link:<br>%4\$s</p>";
$definitions["email.mention.subject"] = "%1\$s mentioned you in a post";
$definitions["email.privateAdd.body"] = "<p>You have been added to a private conversation titled <strong>%1\$s</strong>.</p><hr>%2\$s<hr><p>To view this conversation, check out the following link:<br>%3\$s</p>";
$definitions["email.privateAdd.subject"] = "You have been added to a private conversation";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> has replied to a conversation which you followed: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>To view the new activity, check out the following link:<br>%4\$s</p>";
$definitions["email.post.subject"] = "There is a new reply to '%1\$s'";


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
