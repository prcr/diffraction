import attila

AUTHOR = 'paulo ribeiro'
SITENAME = 'd i f f r a c t i o n'
SITEURL = "https://diffraction.pt/blog"

PATH = "content"

TIMEZONE = 'Europe/Lisbon'

DEFAULT_LANG = 'en'

# Feed generation is usually not desired when developing
FEED_ALL_ATOM = True
CATEGORY_FEED_ATOM = False
TRANSLATION_FEED_ATOM = False
AUTHOR_FEED_ATOM = False
AUTHOR_FEED_RSS = False

# Theme
THEME = attila.get_path()
HOME_COLOR = '#222222'  # fallback header color when no cover image is set

# Plugins
PLUGINS = []  # explicit list turns off auto-discovery

# Social
SOCIAL = (
    ('github', 'https://github.com/prcr'),
)

DEFAULT_PAGINATION = False

# Uncomment following line if you want document-relative URLs when developing
# RELATIVE_URLS = True
