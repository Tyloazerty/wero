// <!-- Matomo -->
var _paq = window._paq = window._paq || [];
/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
_paq.push(['requireCookieConsent']);
(function() {
    const u = 'https://epicompany.matomo.cloud/';
    _paq.push(['setTrackerUrl', `${u}matomo.php`]);
    _paq.push(['setSiteId', '6']);
    const d = document; const g = d.createElement('script'); const
        s = d.getElementsByTagName('script')[0];
    g.async = true; g.src = 'https://cdn.matomo.cloud/epicompany.matomo.cloud/matomo.js'; s.parentNode.insertBefore(g, s);
})();
// <!-- End Matomo Code -->