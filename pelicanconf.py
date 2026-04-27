import attila

AUTHOR = 'paulo ribeiro'
SITENAME = 'd i f f r a c t i o n'
SITEURL = ""

PATH = "content"

TIMEZONE = 'Europe/Lisbon'

DEFAULT_LANG = 'en'

# Feed generation is usually not desired when developing
FEED_ALL_ATOM = None
CATEGORY_FEED_ATOM = None
TRANSLATION_FEED_ATOM = None
AUTHOR_FEED_ATOM = None
AUTHOR_FEED_RSS = None

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

RELATIVE_URLS = True
