<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    
    'saml2' => [
        'acs' => 'https://banner9test.isil.pe:9443/samlsso', // (the IDP's 'Assertion Consumer Service' URL. Also known as the assertion callback URL or SAML assertion consumer endpoint)
        'entityid' => 'banner9test.isil.pe', // (the IDP's globally unique "Entity ID", normally formatted as a URI, but it is not a real URL)
        'certificate' => 'MIIGfzCCBWegAwIBAgIQDzXKkm5F+7lcoc76qr4lDDANBgkqhkiG9w0BAQsFADBZMQswCQYDVQQGEwJVUzEVMBMGA1UEChMMRGlnaUNlcnQgSW5jMTMwMQYDVQQDEypSYXBpZFNTTCBUTFMgRFYgUlNBIE1peGVkIFNIQTI1NiAyMDIwIENBLTEwHhcNMjIwMjIxMDAwMDAwWhcNMjMwMzAzMDAwMDAwWjAUMRIwEAYDVQQDDAkqLmlzaWwucGUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDR849wg3cn5YRxOsSGT8Mac3InVHTVFe6AVRFmZyGdkr+WcWn7dCQHdX1xEcwhwPKnwUXHaaSClqSaejjbYJ3hyZ+bTksryvtbd1M/jaAWj6GUc0imNaXOhNE81LEfUMyL6ppTy+vQ17w3WUdNUdxB0MCAL/vmA0cAZQYU/Y1r2p0rgDrhyQHkdi5BoXo3UB3XUzPQJHZA5igPZfpjjv6S7yh1JhJXkyYvCVDEvMUmBKdCLWLqCaUkGXTJ0I8jtOeMW4NeKf8H4LZeOOAMLQpxKv4cJNRPSRkZdsaSvpyBjn8+4j0ykwk6bU+rF8Uj/IrdYP4QPn1ocwPw2MYoiX2/AgMBAAGjggOGMIIDgjAfBgNVHSMEGDAWgBSkjeW+fHnkcCNtLik0rSNY3PUxfzAdBgNVHQ4EFgQUsXdRbQQTb5SyEpv0PRQOSvSuB2IwHQYDVR0RBBYwFIIJKi5pc2lsLnBlggdpc2lsLnBlMA4GA1UdDwEB/wQEAwIFoDAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwgZsGA1UdHwSBkzCBkDBGoESgQoZAaHR0cDovL2NybDMuZGlnaWNlcnQuY29tL1JhcGlkU1NMVExTRFZSU0FNaXhlZFNIQTI1NjIwMjBDQS0xLmNybDBGoESgQoZAaHR0cDovL2NybDQuZGlnaWNlcnQuY29tL1JhcGlkU1NMVExTRFZSU0FNaXhlZFNIQTI1NjIwMjBDQS0xLmNybDA+BgNVHSAENzA1MDMGBmeBDAECATApMCcGCCsGAQUFBwIBFhtodHRwOi8vd3d3LmRpZ2ljZXJ0LmNvbS9DUFMwgYUGCCsGAQUFBwEBBHkwdzAkBggrBgEFBQcwAYYYaHR0cDovL29jc3AuZGlnaWNlcnQuY29tME8GCCsGAQUFBzAChkNodHRwOi8vY2FjZXJ0cy5kaWdpY2VydC5jb20vUmFwaWRTU0xUTFNEVlJTQU1peGVkU0hBMjU2MjAyMENBLTEuY3J0MAkGA1UdEwQCMAAwggF/BgorBgEEAdZ5AgQCBIIBbwSCAWsBaQB2AK33vvp8/xDIi509nB4+GGq0Zyldz7EMJMqFhjTr3IKKAAABfxz0nWoAAAQDAEcwRQIhAJ5KhXr+JAV/6NKSQvbiCp65oDlnlJenPb165TKsR9k8AiBfhkEXVPNgPbB2utmxxRfm4ekp9YVepw68MTuRa47JmAB3ADXPGRu/sWxXvw+tTG1Cy7u2JyAmUeo/4SrvqAPDO9ZMAAABfxz0nT0AAAQDAEgwRgIhAOMiIQIPBpe7aThOPcX5TeLFH5xoQUQj2mRTzZmkEL7EAiEAjJOVBgfTbBKU1fAMw9hOP14SaiqeHMnkPM2lkIaiVdwAdgC3Pvsk35xNunXyOcW6WPRsXfxCz3qfNcSeHQmBJe20mQAAAX8c9J0xAAAEAwBHMEUCIQCLTkuRNHSYpdGouVt2dNKUDjl/o52fhR57CqpJDQFiPAIgQxNGa72890Q5PXzEIdhGbLEupjDSDUZ1jP0BKH8/9Y8wDQYJKoZIhvcNAQELBQADggEBAIxv4gJNRw4hvwzHh4HkFMG3FsWSXeFJqEWx+HT0SrLETq9Roo6m6Qa9p5HzV/B4r6vRET/p2sWLiHcxRyljMiDB0b2vv5KXY2hTxE9om+GKZFBhlWFv9SyKGuv6pmhdJ0Lwjgc+B5Q4m1cxxmtQaf2CEp8gt37veikb1OfP4pwMYcQjtVflab4SE3e4i+qwZAPE6dY5v8z3TWwHNtTkOXfiw3QE4QqR+N2/wSo0qapmKOxNQGNekfRigLE28pH161+kUsxjUOZQeBk0U+k3uEfQMM6H0xo4ypgBue8Y204XJphFwH2Ga9Ksg/TAJWajLsTl9yEVwfkoiUnKuh6IZDU=',//file_get_contents('storage/app/cert/eis.pem'), // (the IDP's assertion signing certificate)
        //'certificate' => file_get_contents('storage/app/cert/eis.pem'),
        'sp_certificate' => file_get_contents('storage/app/cert/sp_saml.crt'),
        'sp_private_key' => file_get_contents('storage/app/cert/sp_saml.pem'),
        'sp_acs' => 'auth/saml2/callback',
    ],

];
