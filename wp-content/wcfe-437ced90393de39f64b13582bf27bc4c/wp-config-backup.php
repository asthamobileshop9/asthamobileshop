<?php

# No direct access
$secureSrcClassName  = 'WCFE\Modules\Editor\Model\EmergencyRestore';
( class_exists( $secureSrcClassName ) && ( get_class( $this ) == $secureSrcClassName ) && $this->isConfirmed() ) or die( 'Access Denied' );


return array( 'content' => 'PD9waHAKLyoqCiAqIFRoZSBiYXNlIGNvbmZpZ3VyYXRpb24gZm9yIFdvcmRQcmVzcwogKgogKiBUaGUgd3AtY29uZmlnLnBocCBjcmVhdGlvbiBzY3JpcHQgdXNlcyB0aGlzIGZpbGUgZHVyaW5nIHRoZQogKiBpbnN0YWxsYXRpb24uIFlvdSBkb24ndCBoYXZlIHRvIHVzZSB0aGUgd2ViIHNpdGUsIHlvdSBjYW4KICogY29weSB0aGlzIGZpbGUgdG8gIndwLWNvbmZpZy5waHAiIGFuZCBmaWxsIGluIHRoZSB2YWx1ZXMuCiAqCiAqIFRoaXMgZmlsZSBjb250YWlucyB0aGUgZm9sbG93aW5nIGNvbmZpZ3VyYXRpb25zOgogKgogKiAqIE15U1FMIHNldHRpbmdzCiAqICogU2VjcmV0IGtleXMKICogKiBEYXRhYmFzZSB0YWJsZSBwcmVmaXgKICogKiBBQlNQQVRICiAqCiAqIEBsaW5rIGh0dHBzOi8vY29kZXgud29yZHByZXNzLm9yZy9FZGl0aW5nX3dwLWNvbmZpZy5waHAKICoKICogQHBhY2thZ2UgV29yZFByZXNzCiAqLwoKLy8gKiogTXlTUUwgc2V0dGluZ3MgLSBZb3UgY2FuIGdldCB0aGlzIGluZm8gZnJvbSB5b3VyIHdlYiBob3N0ICoqIC8vCi8qKiBUaGUgbmFtZSBvZiB0aGUgZGF0YWJhc2UgZm9yIFdvcmRQcmVzcyAqLwpkZWZpbmUoICdEQl9OQU1FJywgJ2JpdG5hbWlfd29yZHByZXNzJyApOwoKLyoqIE15U1FMIGRhdGFiYXNlIHVzZXJuYW1lICovCmRlZmluZSggJ0RCX1VTRVInLCAnYm5fd29yZHByZXNzJyApOwoKLyoqIE15U1FMIGRhdGFiYXNlIHBhc3N3b3JkICovCmRlZmluZSggJ0RCX1BBU1NXT1JEJywgJzU3NTMzOWQ3MTInICk7CgovKiogTXlTUUwgaG9zdG5hbWUgKi8KZGVmaW5lKCAnREJfSE9TVCcsICdsb2NhbGhvc3Q6MzMwNicgKTsKCi8qKiBEYXRhYmFzZSBDaGFyc2V0IHRvIHVzZSBpbiBjcmVhdGluZyBkYXRhYmFzZSB0YWJsZXMuICovCmRlZmluZSggJ0RCX0NIQVJTRVQnLCAndXRmOCcgKTsKCi8qKiBUaGUgRGF0YWJhc2UgQ29sbGF0ZSB0eXBlLiBEb24ndCBjaGFuZ2UgdGhpcyBpZiBpbiBkb3VidC4gKi8KZGVmaW5lKCAnREJfQ09MTEFURScsICcnICk7CgovKiojQCsKICogQXV0aGVudGljYXRpb24gVW5pcXVlIEtleXMgYW5kIFNhbHRzLgogKgogKiBDaGFuZ2UgdGhlc2UgdG8gZGlmZmVyZW50IHVuaXF1ZSBwaHJhc2VzIQogKiBZb3UgY2FuIGdlbmVyYXRlIHRoZXNlIHVzaW5nIHRoZSB7QGxpbmsgaHR0cHM6Ly9hcGkud29yZHByZXNzLm9yZy9zZWNyZXQta2V5LzEuMS9zYWx0LyBXb3JkUHJlc3Mub3JnIHNlY3JldC1rZXkgc2VydmljZX0KICogWW91IGNhbiBjaGFuZ2UgdGhlc2UgYXQgYW55IHBvaW50IGluIHRpbWUgdG8gaW52YWxpZGF0ZSBhbGwgZXhpc3RpbmcgY29va2llcy4gVGhpcyB3aWxsIGZvcmNlIGFsbCB1c2VycyB0byBoYXZlIHRvIGxvZyBpbiBhZ2Fpbi4KICoKICogQHNpbmNlIDIuNi4wCiAqLwpkZWZpbmUoJ0FVVEhfS0VZJywgJzAyYWVmMThkMmFhOTEyNzNhOTBlNGNmN2E4ZjhjNjIxOTk3NTZhNDQyZWYxYmRiM2EwMTY1ZjM4YWRhZTJhMzknKTsKZGVmaW5lKCdTRUNVUkVfQVVUSF9LRVknLCAnM2IxYjVlZmYzY2Q3NWUzNTdiNWUwY2JlNTVlYmI5YmViNjUyNGRiNGU2NTNkZGVlYmIyZTVmY2IyY2E4NGJlOCcpOwpkZWZpbmUoJ0xPR0dFRF9JTl9LRVknLCAnN2E1NGZlOThkYWMwZWIyMmU5MDk3MjViMzZlNTJhZDcxOWU4YjYxYjc4NDVkYTY2OWFiNDcxYjAwM2ExMDEzYicpOwpkZWZpbmUoJ05PTkNFX0tFWScsICdiYzcwODQ5Njg5OTdlMGFiYTU0YWZlYWRkNjM4YWYxNjk2Nzc5MDJjOWUzZTNjODQyYTNkM2ZiZGU2MWRjNWFlJyk7CmRlZmluZSgnQVVUSF9TQUxUJywgJzIyMWE3MGM1NDYxMDcwYmUwM2RlMjU2M2E3ODg3NTc0ZmMzOThhMjYxYTljNGNmNDdmYWMyMzkxYTg4Y2Q5ZmQnKTsKZGVmaW5lKCdTRUNVUkVfQVVUSF9TQUxUJywgJzI4M2RmZWI0MmNiYTQzMDQyNGIwYzZhYWFjODViZTM4YWM1ODA2OWM1NTk3MzNmMGQ1YmY4NjZjYzBjNmJhYjYnKTsKZGVmaW5lKCdMT0dHRURfSU5fU0FMVCcsICc0MWY3MDFkYzdjZTg3OWIwMDA4ZTIzZDk2NmE2MTljMDg2YmYwZDA0ZjY1NzcwZWU2YThkNWFiMjM5NTY0ZWI4Jyk7CmRlZmluZSgnTk9OQ0VfU0FMVCcsICc5NDgzYTIyZGI3M2IyN2IzNDVhN2Y3ZjAyZjY1N2ZmZTUxMmU4ZWExYzMzNWVmYTkxMmZjMmFkNjI5MWRjMGM5Jyk7CgovKiojQC0qLwoKLyoqCiAqIFdvcmRQcmVzcyBEYXRhYmFzZSBUYWJsZSBwcmVmaXguCiAqCiAqIFlvdSBjYW4gaGF2ZSBtdWx0aXBsZSBpbnN0YWxsYXRpb25zIGluIG9uZSBkYXRhYmFzZSBpZiB5b3UgZ2l2ZSBlYWNoCiAqIGEgdW5pcXVlIHByZWZpeC4gT25seSBudW1iZXJzLCBsZXR0ZXJzLCBhbmQgdW5kZXJzY29yZXMgcGxlYXNlIQogKi8KJHRhYmxlX3ByZWZpeCA9ICd3cF8nOwoKLyoqCiAqIEZvciBkZXZlbG9wZXJzOiBXb3JkUHJlc3MgZGVidWdnaW5nIG1vZGUuCiAqCiAqIENoYW5nZSB0aGlzIHRvIHRydWUgdG8gZW5hYmxlIHRoZSBkaXNwbGF5IG9mIG5vdGljZXMgZHVyaW5nIGRldmVsb3BtZW50LgogKiBJdCBpcyBzdHJvbmdseSByZWNvbW1lbmRlZCB0aGF0IHBsdWdpbiBhbmQgdGhlbWUgZGV2ZWxvcGVycyB1c2UgV1BfREVCVUcKICogaW4gdGhlaXIgZGV2ZWxvcG1lbnQgZW52aXJvbm1lbnRzLgogKgogKiBGb3IgaW5mb3JtYXRpb24gb24gb3RoZXIgY29uc3RhbnRzIHRoYXQgY2FuIGJlIHVzZWQgZm9yIGRlYnVnZ2luZywKICogdmlzaXQgdGhlIENvZGV4LgogKgogKiBAbGluayBodHRwczovL2NvZGV4LndvcmRwcmVzcy5vcmcvRGVidWdnaW5nX2luX1dvcmRQcmVzcwogKi8KZGVmaW5lKCAnV1BfREVCVUcnLCBmYWxzZSApOwoKLyogVGhhdCdzIGFsbCwgc3RvcCBlZGl0aW5nISBIYXBweSBwdWJsaXNoaW5nLiAqLwoKZGVmaW5lKCdGU19NRVRIT0QnLCAnZGlyZWN0Jyk7CgovKioKICogVGhlIFdQX1NJVEVVUkwgYW5kIFdQX0hPTUUgb3B0aW9ucyBhcmUgY29uZmlndXJlZCB0byBhY2Nlc3MgZnJvbSBhbnkgaG9zdG5hbWUgb3IgSVAgYWRkcmVzcy4KICogSWYgeW91IHdhbnQgdG8gYWNjZXNzIG9ubHkgZnJvbSBhbiBzcGVjaWZpYyBkb21haW4sIHlvdSBjYW4gbW9kaWZ5IHRoZW0uIEZvciBleGFtcGxlOgogKiAgZGVmaW5lKCdXUF9IT01FJywnaHR0cDovL2V4YW1wbGUuY29tJyk7CiAqICBkZWZpbmUoJ1dQX1NJVEVVUkwnLCdodHRwOi8vZXhhbXBsZS5jb20nKTsKICoKKi8KCmlmICggZGVmaW5lZCggJ1dQX0NMSScgKSApIHsKICAgICRfU0VSVkVSWydIVFRQX0hPU1QnXSA9ICdsb2NhbGhvc3QnOwp9CgpkZWZpbmUoJ1dQX1NJVEVVUkwnLCAnaHR0cDovLycgLiAkX1NFUlZFUlsnSFRUUF9IT1NUJ10gLiAnLycpOwpkZWZpbmUoJ1dQX0hPTUUnLCAnaHR0cDovLycgLiAkX1NFUlZFUlsnSFRUUF9IT1NUJ10gLiAnLycpOwoKCi8qKiBBYnNvbHV0ZSBwYXRoIHRvIHRoZSBXb3JkUHJlc3MgZGlyZWN0b3J5LiAqLwppZiAoICEgZGVmaW5lZCggJ0FCU1BBVEgnICkgKSB7CglkZWZpbmUoICdBQlNQQVRIJywgZGlybmFtZSggX19GSUxFX18gKSAuICcvJyApOwp9CgovKiogU2V0cyB1cCBXb3JkUHJlc3MgdmFycyBhbmQgaW5jbHVkZWQgZmlsZXMuICovCnJlcXVpcmVfb25jZSggQUJTUEFUSCAuICd3cC1zZXR0aW5ncy5waHAnICk7CgpkZWZpbmUoJ1dQX1RFTVBfRElSJywgJy9vcHQvYml0bmFtaS9hcHBzL3dvcmRwcmVzcy90bXAnKTsKCgovLyAgRGlzYWJsZSBwaW5nYmFjay5waW5nIHhtbHJwYyBtZXRob2QgdG8gcHJldmVudCBXb3JkcHJlc3MgZnJvbSBwYXJ0aWNpcGF0aW5nIGluIEREb1MgYXR0YWNrcwovLyAgTW9yZSBpbmZvIGF0OiBodHRwczovL2RvY3MuYml0bmFtaS5jb20vZ2VuZXJhbC9hcHBzL3dvcmRwcmVzcy90cm91Ymxlc2hvb3RpbmcveG1scnBjLWFuZC1waW5nYmFjay8KCmlmICggIWRlZmluZWQoICdXUF9DTEknICkgKSB7CiAgICAvLyByZW1vdmUgeC1waW5nYmFjayBIVFRQIGhlYWRlcgogICAgYWRkX2ZpbHRlcignd3BfaGVhZGVycycsIGZ1bmN0aW9uKCRoZWFkZXJzKSB7CiAgICAgICAgdW5zZXQoJGhlYWRlcnNbJ1gtUGluZ2JhY2snXSk7CiAgICAgICAgcmV0dXJuICRoZWFkZXJzOwogICAgfSk7CiAgICAvLyBkaXNhYmxlIHBpbmdiYWNrcwogICAgYWRkX2ZpbHRlciggJ3htbHJwY19tZXRob2RzJywgZnVuY3Rpb24oICRtZXRob2RzICkgewogICAgICAgICAgICB1bnNldCggJG1ldGhvZHNbJ3BpbmdiYWNrLnBpbmcnXSApOwogICAgICAgICAgICByZXR1cm4gJG1ldGhvZHM7CiAgICB9KTsKICAgIGFkZF9maWx0ZXIoICdhdXRvX3VwZGF0ZV90cmFuc2xhdGlvbicsICdfX3JldHVybl9mYWxzZScgKTsKfQo=' );