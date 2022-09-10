#  Perform all crud operations with ajax.
####  [Data Set](https://github.com/AhnabShahin/6amTech#readme)
## Category
### Index
```javascript
var form = new FormData();
var settings = {
  "url": "http://127.0.0.1:8000/api/category",
  "method": "GET",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Store
```javascript
var form = new FormData();
form.append("name", "Shirt");

var settings = {
  "url": "http://127.0.0.1:8000/api/category",
  "method": "POST",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Show
```javascript
var settings = {
  "url": "http://127.0.0.1:8000/api/category/1",
  "method": "GET",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Update
```javascript
var settings = {
  "url": "http://127.0.0.1:8000/api/category/1",
  "method": "PUT",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  "data": {
    "name": "Pant"
  }
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Destroy
```javascript
var settings = {
  "url": "http://127.0.0.1:8000/api/category/1",
  "method": "DELETE",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
## Product
### Index
```javascript
var form = new FormData();
var settings = {
  "url": "http://127.0.0.1:8000/api/products",
  "method": "GET",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Store
```javascript
var form = new FormData();
form.append("name", "Full Shirt");

var settings = {
  "url": "http://127.0.0.1:8000/api/products",
  "method": "POST",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Show
```javascript
var settings = {
  "url": "http://127.0.0.1:8000/api/products/1",
  "method": "GET",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Update
```javascript
var settings = {
  "url": "http://127.0.0.1:8000/api/products/1",
  "method": "PUT",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  "data": {
    "name": "Half Shirt"
  }
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Destroy
```javascript
var settings = {
  "url": "http://127.0.0.1:8000/api/products/1",
  "method": "DELETE",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
## User
### Register
```javascript
var form = new FormData();
form.append("name", "shahin");
form.append("email", "admin@gmail.com");
form.append("password", "admin@gmail.com");

var settings = {
  "url": "http://127.0.0.1:8000/api/register",
  "method": "POST",
  "timeout": 0,
  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Login
```javascript
var form = new FormData();
form.append("email", "admin@gmail.com");
form.append("password", "admin@gmail.com");

var settings = {
  "url": "http://127.0.0.1:8000/api/login",
  "method": "POST",
  "timeout": 0,
  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Get User
```javascript
var settings = {
  "url": "http://127.0.0.1:8000/api/get-user",
  "method": "GET",
  "timeout": 0,
  "headers": {
    "Authorization": `Bearer ${token}`,
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
## User Type
### Index
```javascript
var form = new FormData();
var settings = {
  "url": "http://127.0.0.1:8000/api/user-type",
  "method": "GET",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Store
```javascript
var form = new FormData();
form.append("name", "Seller");

var settings = {
  "url": "http://127.0.0.1:8000/api/user-type",
  "method": "POST",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Show
```javascript
var settings = {
  "url": "http://127.0.0.1:8000/api/user-type/3",
  "method": "GET",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Update
```javascript
var settings = {
  "url": "http://127.0.0.1:8000/api/user-type/1",
  "method": "PUT",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  "data": {
    "name": "Buyer"
  }
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
### Destroy
```javascript
var settings = {
  "url": "http://127.0.0.1:8000/api/user-type/1",
  "method": "DELETE",
  "timeout": 0,
  "headers": {
     "Authorization": `Bearer ${token}`,
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
```
