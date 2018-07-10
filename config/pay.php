<?php

return [
	'alipay' => [
		'app_id' => '2016091800539582',
		'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtTPCT9coy3/22OwxyYHkAlu+s52f/PDXt58+rxKtPUnXtiyfKf0bnUCXysh+triKoV8U2FPFx2wyHYAgaT8goQk5iCqE1c9ooyI00ijemPIKrtFlqqJTAt01JSaNYmcnHyNG2H5KWTS9GQ0AsSjxof5b0+3w4YCFmJFmloYnP+pnCh1TPDUyboEToIxF0juSHQiSYP6WJ0gDLWdfPVIuPUNJI+Ld5ytKkJL7ysXgB0msw55yOpBJED+y/0P+VEPlBaF3PYB4Z4UIlHDpD/3RYLblNuVfgG4hLRK6pRsXnFYskp/2QCYgBjtff9zyOzLYDQ9hIpppfmpDiCT4FD4wDwIDAQAB',
		'private_key' => 'MIIEpAIBAAKCAQEA0ie1gmW9IXReMLMYy0KxRBiEEpBH+vhcVvkxAkT/DKljnR9c6ZEUc3Ui7ayrs9adx5r1GhW0vDVa0abzHObTI17C8BVm9Koe3cFNMxEbAVhvMYAiQ3lqD30kDkN7/vUrVjSrWfiqTrOvw9oOP3OTXRb2LeDdz6xxYibWTA3nZAhBHMVrPcb6G1zAtNoUHEKZcDj6/QC0rixUtZHYsdMFhoyacEMhrgyRk8qgSzGS1M5BXGdYLUexWY5c00rvAomxlgaVIqa+eA2SnLtDgCzFL78EuOTa7FBbVq6MzQnjyQ7lnx0dF5RLhVtIq20rDnLYlTA3n0pqZA/9SbMdQkNvgwIDAQABAoIBADRI3ta3WyukmP6CwGtph1LKyqkXrmDZQ5f73V6ULeRHjFn+AI63op/rB6qcKAfRIGYVvl8kAVhF6fd5EskhAGyvWc6DdJ7waEeBnSRUYCSgjOGC4INrBKEf4EWQMpxHAOYsqmjy/eQgvlz6tkrBBWvGl67oYCcX3wmtYemAGA6Br7mYdCgKEmIWCAZ3bVGR3IOdNxTdRzRDte7JkjhgJae5byteIw4U0pRHWz8QYOQ6smO4WvStBCMZLPqKl6wpGwam/Ec01lf/NCuBz9adOqF3OAnSUlDcSKbpqVmZthZRQyE642a631Butl4l54TTCvXUaNGRGWM49d1nHJuSi6kCgYEA8QD7kSv27DGZazBYFNYhsnydgaHgntNSoCxi0qmNC9Wcm5rBwYKuzwtwfQj2bdmCE6VgzlOLfbWILCoTHh/mFMaqRZTa6p85Z2GTkmhI10qrmRIsPHkXl8MPIob1krc0DDDfuXOAEEevR+ar7YB4ZoFQP5KooDTWxu0fglufoE0CgYEA3ztUEax6DhFSgc0t5FDdb1YOFAm+ML3eRWH8n8pH/AxcfS5Bs+HTeTFrFhRH7O+vfdQ/oZ7zwPYCI1nrpgK0FGPvqbhT3ZF97BpjUU/03dJ1CiIvlL6DTYkhNW/PlXouOpArMqklZD8RnwCiEGdUfhc2nGeaaUJLXGoYYsKatw8CgYAGK65FQ0jpN0PkWLKIpgrq1QH7ZbeomWSOMVS+bBTubqO54DaBy+TJ7FMPAIG+wkjwU9WssrrplxJLfzBKHyr28Tc+3NbWFwmTOg5bO0xSJtlJ7Asx6S/PdPEYQzhab1Jn1YCE8Q4gXJWCU8enJxjuFvWFCy5CG9g786pQ3iOyKQKBgQDeiJJCHCKAq5wIcbXyCPr15l+aciv7Awv1Nr1TvZ8NEHWTBO3SmKjsA+uw0v7wn+/eDBxyzbZJAfUXsKhNkhxax1U/Z9WS51sUZynjAUYla4vpUjMEoPbb8Hv+fTv+0xIKp3Woxx3TVVwHmeX1XEzKdfGm8VDo5YGi2tD8gusg2QKBgQDRJAysCahTMOgfkYuQNxaje6j1+O+P7GBVVAIeLtary81vbr/aiGiidB3ziXuEO5djK7lV1ENSqZVGevMP0qk4rhzVKoIKa4HshD8JRApqZx6/pKV/+mTD5iV5U4/35igO0Ky1vwofcrT5XVPNkdzjR2L1OI1Bp0bfxu3iQLbRgA==',
		'log' => [
			'file' => storage_path('logs/alipay.log'),
		],
	],
	'wechat' => [
		'app_id' => 'wx53630dacab9d3d8b',
		'mch_id' => '1231332902',
		'key' => 'BJRuCYwpcDtrVPY4mC8aUmi9wDzZTsQc',
		'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
		'cert_key' => resource_path('wechat_pay/apiclient_key.pem'),
		'log' => [
			'file' => storage_path('logs/wechat_pay.log'),
		],
	],
];