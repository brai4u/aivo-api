# aivo test

## Requirements
  * git (https://git-scm.com/downloads)
  * composer (https://getcomposer.org/)

## how to install

``git clone https://github.com/brai4u/aivo-api.git``

``cd aivo-api``

``composer install``

Copy ``.env.example`` and rename to ``.env`` here edit the following lines

```
FACEBOOK_APP_ID=id
FACEBOOK_APP_SECRET=secretid
FACEBOOK_TOKEN=apptoken
```

to get an APP_ID and APP_SECRET go to https://developers.facebook.com/ and create a new app and click on 'dashboard' section then go to https://developers.facebook.com/tools/accesstoken/ and copy the token from you new app

``php -S localhost:8000 -t public``

Enter to http://localhost:8000 and de response should be

``
{
status: "online"
}
``

## how to use

GET /profile/facebook/123456

Example:
http://localhost:8000/profile/facebook/111

Response
```json
{
id: "111",
firstName: "Evelyn",
lastName: "Lilly",
shortName: "Evelyn",
profileImage: "https://scontent.xx.fbcdn.net/v/t1.0-1/p200x200/1460000_10102572123840001_4781256006491491724_n.jpg?oh=9feeebdc91fb05c99291c794e8fa56d4&oe=59C9B46F",
coverImage: "https://scontent.xx.fbcdn.net/v/t1.0-0/p180x540/16142312_10103435908618381_1896812636425046304_n.jpg?oh=a0dbc6a7ded2aa3eec0f68c5b2773f7d&oe=59E1BF00"
}
```