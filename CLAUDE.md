# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Podlive website (podlive.eu) is a static landing page for promoting Podlive podcast streaming apps across iOS, macOS, and Android platforms. The site is built with pure HTML5 and CSS3 - **no JavaScript or frameworks are used**.

## Development Commands

**Deployment:**
```bash
make publish    # Deploy to uberspace server via rsync
```

**No build process required** - Static HTML/CSS only.

## Technical Constraints

- **NO JavaScript allowed** - Pure HTML/CSS implementation only
- **NO external dependencies** - Must be completely self-contained
- **German language only** - All content must be in German
- **Mobile-first development** - Responsive design with breakpoints at 768px and 1024px

## Architecture

**File Structure:**
- `site/index.html` - Main landing page
- `site/css/style.css` - All styling using CSS variables and custom properties
- `site/images/` - Static assets (hero images, team avatars)
- Legal pages: `impressum.html`, `privacy-policy.html`, `terms-of-service.html`

**CSS Architecture:**
- Custom CSS variables for theming (primary brand color: `rgb(133, 77, 255)`)
- Dark/light mode support via `@media (prefers-color-scheme: dark)`
- CSS Grid and Flexbox for layouts
- System font stack for performance

**Design Principles:**
- Mobile-first responsive design (320px - 767px - 1024px+ breakpoints)
- Accessibility-first approach with WCAG compliance
- Touch targets minimum 44px
- Semantic HTML5 structure

## Content Requirements

**Landing Page Sections:**
1. Hero with app download CTAs for iOS/macOS/Android
2. Features highlighting push notifications, sync, listener counts
3. Team section with 3 members (Stefan, Phranck, Sven)
4. Contact with email, GitHub, Mastodon links
5. FAQ about Studio Link OnAir integration
6. Footer with legal page links

**Legal Content:**
- Content must exactly match https://www.podlive.io/ legal pages
- German legal compliance (TMG, GDPR) required
- Consistent styling with main site

## Quality Standards

- W3C HTML/CSS validation required
- No external dependencies or CDN usage
- Screen reader compatibility
- Keyboard navigation support
- Cross-browser compatibility testing

## Deployment

Target server: `uberspace:/home/funken/web/podlive.eu/`
- Uses rsync via Makefile
- Excludes `meltmail` directory from deployment

## JavaScript Exceptions

- Allow JavaScript usage for the meltmail mailto script