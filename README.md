# 🌊 Raie-lax

> Réservez une parenthèse au littoral — sans laisser de trace.

Thème enfant WordPress pour **Raie-lax**, plateforme de réservation d'expériences touristiques durables en bord de mer : déconnexion, repos et préservation des fonds marins.

Projet en binôme — Bachelier Écriture Multimédia, ISFSC (2026-2027).

---

## 👥 Équipe

| Membre | GitHub | Rôle principal |
|---|---|---|
| Gaspard | [@gaspardperiquet](https://github.com/gaspardperiquet) | Dev thème / intégration WordPress |
| Binôme | [@Nay30RGB](https://github.com/Nay30RGB) | Design UI / contenus |

**Enseignants :** Florian Holvoet (DFEF) · enseignant·e DIA

---

## 💡 Concept

Raie-lax propose des expériences à la côte pensées pour ralentir : balades guidées sur l'estran, ateliers de sensibilisation aux fonds marins, séjours "déconnexion", activités à faible impact.

**Public cible :** citadin·es en manque de calme, familles, curieux·ses de nature.
**Objectifs du site :**
- Présenter les expériences (fiche, durée, prix, impact écologique)
- Permettre la réservation en ligne
- Sensibiliser à la protection du littoral

---

## 🛠️ Outils

| Besoin | Outil |
|---|---|
| CMS | WordPress 6.5+ |
| Thème parent | Twenty Twenty-Five (block theme) |
| Environnement local | LocalWP |
| Maquettes | Figma |
| Versioning | Git + GitHub |
| Gestion de tâches | GitHub Projects (Kanban) |
| Communication | WhatsApp / Discord |

---

## 📁 Arborescence

```
raie-lax/
├── .github/
│   ├── ISSUE_TEMPLATE/       # Modèles d'issues (tâche, bug)
│   └── pull_request_template.md
├── assets/
│   ├── css/                  # main.css (chargé auto s'il existe)
│   ├── js/                   # main.js (chargé auto s'il existe)
│   ├── img/
│   └── fonts/
├── inc/                      # Fichiers PHP chargés auto (CPT, hooks…)
├── parts/                    # Template parts (header, footer)
├── patterns/                 # Block patterns
├── templates/                # Templates de pages (block theme)
├── .env.example              # Modèle de variables locales (sans secrets)
├── .gitignore
├── functions.php
├── style.css                 # En-tête du thème enfant
├── theme.json                # Couleurs, typo, espacements
└── README.md
```

---

## 🚀 Installation locale (LocalWP)

> Ce dépôt contient **uniquement le thème enfant**, pas WordPress. Chaque membre crée son propre site WordPress en local avec LocalWP, puis y clone le thème.

1. Créer un site dans **LocalWP** (ex : `raie-lax.local`)
2. Dans WordPress → Apparence → Thèmes, vérifier que **Twenty Twenty-Five** (thème parent) est installé
3. Cloner le dépôt dans le dossier des thèmes du site :
   ```bash
   cd "~/Local Sites/raie-lax/app/public/wp-content/themes"
   git clone https://github.com/gaspardperiquet/Raie-LAX.git raie-lax
   ```
4. Dans WordPress → Apparence → Thèmes → activer **Raie-lax**
5. Copier `.env.example` en `.env` si besoin (ne jamais le commit)

---

## 🌿 Conventions de branches

On ne travaille **jamais directement sur `main`**.

| Branche | Usage | Exemple |
|---|---|---|
| `main` | Version stable, protégée | — |
| `develop` | Intégration des features | — |
| `feature/…` | Nouvelle fonctionnalité | `feature/header-nav` |
| `fix/…` | Correction de bug | `fix/menu-mobile` |
| `docs/…` | Documentation | `docs/readme-equipe` |
| `style/…` | CSS / design uniquement | `style/palette-couleurs` |

Format : `type/description-courte` en minuscules, mots séparés par des tirets. Si possible, ajouter le n° d'issue : `feature/12-fiche-experience`.

### Workflow
1. `git checkout develop && git pull`
2. `git checkout -b feature/12-fiche-experience`
3. Coder, commit souvent
4. `git push -u origin feature/12-fiche-experience`
5. Ouvrir une **Pull Request** vers `develop`, lier l'issue (`Closes #12`)
6. Un·e autre membre relit et approuve → merge
7. En fin de sprint : PR `develop` → `main`

---

## ✍️ Conventions de commits

Basées sur [Conventional Commits](https://www.conventionalcommits.org/fr/).

```
type: description courte à l'impératif
```

| Type | Quand |
|---|---|
| `feat` | Nouvelle fonctionnalité |
| `fix` | Correction de bug |
| `style` | CSS, mise en forme (pas de logique) |
| `docs` | README, commentaires |
| `refactor` | Réorganisation du code sans changement visible |
| `chore` | Config, dépendances, .gitignore |

**Exemples :**
```
feat: ajoute le template de fiche expérience
fix: corrige le menu burger sur mobile
style: applique la palette océan au header
docs: complète la section équipe du README
chore: ajoute .env au .gitignore
```

Règles : en français, minuscules, pas de point final, ≤ 72 caractères.

---

## 📋 Répartition des tâches

Le suivi détaillé se fait dans l'onglet **Projects** du dépôt (colonnes : *À faire · En cours · À vérifier · Terminé*).

| Domaine | Responsable |
|---|---|
| Setup dépôt, README, thème enfant | Gaspard |
| Installation LocalWP (chacun) | Gaspard + binôme |
| Maquettes Figma, palette, typo | Binôme |
| Header / footer / navigation | Gaspard |
| Page d'accueil | Binôme |
| Fiches expériences (custom post type) | Gaspard |
| Contenus & textes | Binôme |
| Formulaire de réservation | Gaspard |
| Tests & accessibilité | Gaspard + binôme |

### Labels utilisés
On utilise les labels par défaut de GitHub : `enhancement` (nouvelle fonctionnalité) · `documentation` · `bug` · `question` · `help wanted` · `good first issue`

---

## 🔒 Sécurité

- Aucun mot de passe, clé API ou dump SQL dans le dépôt
- Les secrets vont dans `.env` (ignoré par Git) — voir `.env.example`
- En cas de fuite : changer la clé immédiatement, puis la retirer de l'historique

---

## 📄 Licence

GPL-2.0-or-later (comme WordPress).
