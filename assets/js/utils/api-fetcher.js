class APIFetcher {
    static fetchData(url, method = 'GET', data = null, token = '') {
      return new Promise((resolve, reject) => {
        const options = {
          method,
          headers: {},
        };
  
        if (token) {
          options.headers.Authorization = `Bearer ${token}`;
        }
  
        if (method !== 'GET') {
          const formData = new FormData();
          for (const key in data) {
           
            if (key.endsWith('[]')) {

              for (let i = 0; i < data[key].length; i++) {
                formData.append(key, data[key][i]);
            }

            } else {
              formData.append(key, data[key]);
            }
            
          }
          console.log(formData)
          options.body = formData;
        }

        //console.log(options);
  
        fetch(url, options)
          .then(response => response.json())
          .then(data => resolve(data))
          .catch(error => resolve(error));
      });
    }
  }