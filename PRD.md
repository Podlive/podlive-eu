# Product Requirements Document (PRD)
## Podlive Website - Landing Page

### Project Overview
**Product Name:** Podlive Website  
**Domain:** podlive.eu  
**Type:** Landing Page for Mobile & Desktop Apps  
**Language:** German  
**Technology Stack:** HTML5 + CSS3 (CSS frameworks allowed, no JavaScript)

### Purpose & Goals
Create a simple, responsive landing page that serves as the primary web presence for the Podlive app ecosystem. The website's main goal is to drive app downloads and provide essential information about the Podlive service.

### Target Audience
- German-speaking podcast listeners
- Users interested in live podcast streaming
- Mobile and desktop app users
- Podcast creators looking to broadcast live

### App Download Links
- **iOS:** https://itunes.apple.com/app/id1208250918
- **macOS:** https://geo.itunes.apple.com/app/podlive/id1210411572?mt=12
- **Android:** https://play.google.com/store/apps/details?id=io.podlive.podlive_android

### Content Requirements

#### Hero Section
- **Tagline:** "Verpasse keinen Podcast Livestream"
- **Subheadline:** "Höre Podcast Livestreams mit Podlive! Erhalte eine Push Nachricht, sobald ein Livestream startet."
- Prominent app download buttons for all three platforms
- **Hero image:** `/site/images/hero.jpg`

#### Features Section
Three main features to highlight:

1. **Push Benachrichtigungen**
   - Description: "Wähle von allen gelisteten Podcasts diejenigen aus, die du auf keinen Fall verpassen möchtest. Wann immer einer deiner Favoriten seinen Livestream beginnt oder eine Pre-Show startet, wirst du von Podlive darüber informiert."

2. **Synchronisierung**
   - Description: "Solltest du Podlive auf mehreren Geräten nutzen, werden alle deine Favoriten über deinen Podlive Account auf alle Geräte synchronisiert."

3. **Höhrerzahlen**
   - Description: "Es ist interessant zu erfahren, wieviel Menschen gerade einen bestimmten Podcast hören. Für alle live sendenden Podcasts wird die momentane Zuhörerzahl in Echtzeit angezeigt."

#### Team Section
- **Section Title:** "Team"
- **Description:** "Podlive ist ein Gemeinschaftsprojekt, dem wir einen Teil unserer Freizeit widmen, weil uns Live Podcasting am Herzen liegt. Falls du auch Lust hast Teil des Teams zu werden und uns zu unterstützen, nimm doch gerne Kontakt zu uns auf!"
- **Team Members:**
  1. **Stefan Trauth** - "iOS App und Infrastruktur" (https://stefantrauth.de/)
     - Image: `/site/images/Stefan Avatar.jpg`
  2. **Frank Gregor** - "macOS App" (https://woodbytes.me/)
     - Image: `/site/images/Phranck Avatar.jpeg`
  3. **Sven Hennessen** - "Android App" (https://hennessen.net/)
     - Image: `/site/images/Sven Avatar.jpeg`

#### Contact Section
- **Introduction:** "Hast du ein Problem, eine Frage, wünschst dir ein Feature oder möchtest uns einfach nur Lob aussprechen? Dann melde dich bei uns! Wir freuen uns sehr von dir zu hören!"
- **Contact Methods:**
  - Email: contact@podlive.eu (mailto link)
  - GitHub: https://github.com/Podlive
  - Mastodon: podlive@chaos.social

#### FAQ Section
**Question:** "Wie kann ich meinen Podcast Livestream in Podlive hörbar machen?"
**Answer:** "Damit dein Podcast bei Podlive erscheint, musst du deinen Livestream über Studio Link OnAir broadcasten. Dies geht am einfachsten mit Ultraschall, dem Open Source Community-Projekt von Podcastern für Podcaster."

#### Footer
Links to legal pages:
- Impressum
- Privacy Policy (Datenschutz)
- Terms of Service (AGB)

**Legal Pages Content Sources:**
- **Impressum:** Content must be fetched from https://www.podlive.io/impressum
- **Privacy Policy:** Content must be fetched from https://www.podlive.io/privacy-policy
- **Terms of Service:** Content must be fetched from https://www.podlive.io/terms-of-service
- **IMPORTANT:** All legal page content must match the source websites exactly

### Technical Requirements

#### File Structure
```
site/
  index.html          # Main landing page (all content except legal pages)
  impressum.html      # Legal impressum page
  privacy-policy.html # Privacy policy page
  terms-of-service.html # Terms of service page
  css/
  style.css      # All styling
  images/            # All images and assets
```

#### Design Requirements
1. **Responsive Design**
   - Mobile-first approach
   - Optimized for small mobile devices
   - Tablet and desktop compatibility

2. **Color Scheme & Branding**
   - **Primary brand color:** rgb(133, 77, 255)
   - Light mode (default)
   - Dark mode support
   - Automatic detection of user preference
   - No app icon/logo to be included

3. **Performance**
   - Minimal dependencies (CSS frameworks allowed)
   - Fast loading times
   - Optimized images
   - No JavaScript dependencies

4. **Accessibility**
   - Semantic HTML
   - Proper heading hierarchy
   - Alt text for images
   - Keyboard navigation support

#### Browser Support
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile browsers (iOS Safari, Android Chrome)
- Progressive enhancement approach

### Success Metrics
- App download conversions
- Page load speed (<3 seconds)
- Mobile usability score
- Accessibility compliance

### Deliverables
1. Complete HTML structure in `index.html`
2. CSS styling in `css/style.css`
3. Responsive design implementation
4. Dark / light mode based on system preference
5. Optimized images and assets
6. Legal pages (separate from main landing page)

### Notes
- Keep design simple and clean
- Focus on app download conversion
- Ensure German language accuracy
- Maintain consistency with app branding
- No JavaScript allowed - pure HTML/CSS implementation (CSS frameworks permitted)