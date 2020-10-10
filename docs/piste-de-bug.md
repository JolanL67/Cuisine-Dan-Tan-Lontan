- Le header X-RateLimit-Limit pour les routes ( quand la limite est atteinte il lance une 429 Too Many Requests)
  => piste : https://mattstauffer.com/blog/api-rate-limiting-in-laravel-5-2/
  => solution => Kernel.php ligne 43

- Erreur CSP ( Avec firefox uniquement sur les pages /api/v1/*) 
  => piste : Il ont la même erreur => https://pokeapi.co/api/v2/pokemon/ditto
  => https://developer.mozilla.org/fr/docs/Web/HTTP/CSP
  => https://stackoverflow.com/questions/56386307/loading-of-a-resource-blocked-by-content-security-policy
  => https://github.com/spatie/laravel-csp