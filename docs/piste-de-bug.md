- Le header X-RateLimit-Limit pour les routes ( quand la limite est atteinte il lance une 429 Too Many Requests)
  => piste : https://mattstauffer.com/blog/api-rate-limiting-in-laravel-5-2/
  => solution => app/Http/Kernel.php ligne 43 j'ai passer la limite de nombre de requete à 1000 toute les 1 minutes avant l'erreur 429

- En-tête Cache-Control
  => info : https://developers.google.com/web/fundamentals/performance/optimizing-content-efficiency/http-caching?hl=fr
  => https://stackoverflow.com/questions/51821563/laravel-5-how-to-set-cache-control-http-header-globally
  => https://developer.mozilla.org/fr/docs/Web/HTTP/Headers/Cache-Control
    Un cache privé de 60min a été mis pour les requete xhr afin d'économiser les requete vers l'api
    la contrainte que cela crée c'est que certain utilisateur peuvent ne pas avoir les dernière données mis à jour
    => routes/api.php ligne 19 le nombre doit être renseigner en secondes






- Erreur CSP ( Avec firefox uniquement sur les pages /api/v1/*) 
  => piste : Il ont la même erreur => https://pokeapi.co/api/v2/pokemon/ditto
  => https://developer.mozilla.org/fr/docs/Web/HTTP/CSP
  => https://stackoverflow.com/questions/56386307/loading-of-a-resource-blocked-by-content-security-policy
  => https://github.com/spatie/laravel-csp