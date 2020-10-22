# default-backend-apache-forensic-logging
Swapping out Apache2 for the default-http-backend for ingress-nginx with forensic logging

# Install steps
kubectl apply -f https://raw.githubusercontent.com/mattmattox/default-backend-apache-forensic-logging/main/deployment.yml

# Example output

```
Host: 172.27.2.46
X-Request-ID: 502975cd3c5a1bcfef4227eb3f7e6dca
X-Real-IP: 172.27.1.8
X-Forwarded-For: 172.27.1.8
X-Forwarded-Proto: http
X-Forwarded-Host: 172.27.2.46
X-Forwarded-Port: 80
X-Scheme: http
Cache-Control: max-age=0
Upgrade-Insecure-Requests: 1
User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
Accept-Encoding: gzip, deflate
Accept-Language: en-US,en;q=0.9
```
