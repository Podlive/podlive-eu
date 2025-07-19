# Podlive Website

A static landing page for Podlive podcast streaming applications across iOS, macOS, and Android platforms. The website promotes the Podlive ecosystem and provides download links for all supported platforms.

## 🚀 Project Overview

**Live Site:** https://podlive.eu

Podlive is a modern, mobile-first landing page built with pure HTML5 and CSS3. The site follows a strict no-JavaScript policy (except for email obfuscation) and is completely self-contained without external dependencies.

## 🏗️ Architecture

### Technology Stack
- **HTML5** - Semantic markup with accessibility focus
- **CSS3** - Custom properties, Grid, Flexbox, responsive design
- **No frameworks** - Pure vanilla implementation
- **No build process** - Static files ready for deployment

### File Structure
```
site/
├── index.html              # Main landing page
├── impressum.html          # Legal imprint (German)
├── privacy-policy.html     # Privacy policy
├── terms-of-service.html   # Terms of service
├── css/
│   └── style.css          # Main stylesheet with CSS variables
├── js/
│   └── meltmail.js        # Email obfuscation script
└── images/
    ├── hero.jpg           # Hero section background
    ├── Stefan Avatar.jpg  # Team member avatar
    ├── Phranck Avatar.jpeg # Team member avatar
    └── Sven Avatar.jpeg   # Team member avatar
```

## 📱 Features

### Content Sections
1. **Hero Section** - App download CTAs for iOS, macOS, and Android
2. **Features** - Push notifications, sync capabilities, listener counts
3. **Team** - Developer profiles (Stefan, Phranck, Sven)
4. **Contact** - Email, GitHub, and Mastodon links
5. **FAQ** - Studio Link OnAir integration information
6. **Footer** - Legal page navigation

### Design Principles
- **Mobile-first** responsive design (320px → 768px → 1024px+ breakpoints)
- **Accessibility-first** approach with WCAG compliance
- **Dark/light mode** support via `prefers-color-scheme`
- **Touch-friendly** minimum 44px target sizes
- **Performance-optimized** with system font stack

## 🎨 Styling

### CSS Architecture
- **CSS Custom Properties** for consistent theming
- **Primary Brand Color:** `rgb(133, 77, 255)` (Podlive purple)
- **Grid & Flexbox** layouts for responsive design
- **Dark mode** automatic detection and styling
- **No external fonts** - System font stack for performance

### Responsive Breakpoints
- **Mobile:** 320px - 767px
- **Tablet:** 768px - 1023px  
- **Desktop:** 1024px+

## 🛠️ Development

### Prerequisites
- No build tools required
- Any modern web browser for testing
- rsync for deployment (macOS/Linux)

### Local Development
```bash
# Serve locally (any simple HTTP server)
python3 -m http.server 8000
# or
npx serve site/
```

Open http://localhost:8000 to view the site.

### Quality Assurance
- ✅ W3C HTML/CSS validation
- ✅ Screen reader compatibility  
- ✅ Keyboard navigation support
- ✅ Cross-browser testing
- ✅ Mobile responsiveness testing

## 🚀 Deployment

### Production Deployment
```bash
make publish
```

This command:
- Syncs the `site/` directory to the production server
- Excludes the `meltmail/` directory from deployment
- Uses rsync with delete flag for clean deployments

**Target Server:** `uberspace:/home/funken/web/podlive.eu/`

### Deployment Requirements
- SSH access to uberspace server
- rsync installed locally
- Proper SSH key configuration

## 📧 Email Integration

The site uses a custom email obfuscation system to prevent spam harvesting:

**Implementation:**
1. Include `<script src="js/meltmail.js"></script>` in HTML head
2. Place `<span id="meltmail"></span>` where email should appear
3. Script dynamically fetches email from `/meltmail` endpoint
4. Generates proper `mailto:` links automatically

**Used in:**
- `index.html` (contact section)
- `impressum.html` (legal imprint)

## 📋 Technical Constraints

### Strict Requirements
- ❌ **No JavaScript** (except meltmail.js for email obfuscation)
- ❌ **No external dependencies** or CDN usage
- ❌ **No build process** - must be deployment-ready
- ✅ **German language only** for all content
- ✅ **Mobile-first development** approach

### Browser Support
- Modern browsers with CSS Grid/Flexbox support
- Progressive enhancement for older browsers
- Graceful degradation of advanced CSS features

## 🌍 Internationalization

**Language:** German (de) only
- All content must be in German
- Legal compliance with German regulations (TMG, GDPR)
- Currency and date formats follow German conventions

## 🔒 Legal Compliance

### Required Pages
- **Impressum** - German legal imprint requirement
- **Privacy Policy** - GDPR compliance
- **Terms of Service** - App store requirements

### Content Synchronization
Legal page content must exactly match https://www.podlive.io/ to maintain consistency across platforms.

## 👥 Team

- **Stefan** - Project lead and iOS development
- **Phranck** - macOS development  
- **Sven** - Android development

## 📞 Contact & Links

- **Website:** https://podlive.eu
- **Email:** Dynamic (via meltmail system)
- **GitHub:** https://github.com/stefantrauth
- **Mastodon:** https://mastodon.social/@stefantrauth

## 📄 License

This project is proprietary software for Podlive applications.

---

**Note:** This README serves as comprehensive documentation for the Podlive website project. For specific development guidelines and constraints, refer to `CLAUDE.md` in the project root.