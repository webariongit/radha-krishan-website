var self;
class ComponentGenerator {

    constructor(componentData) {
        self = this;
             // Fetch and replace the components
        componentData.forEach(({ component, data,  js_var_data}) => {
            // console.log(component)
          //  let base_url = BASE_URL.replace(/^(www\.)/, '');
            // console.log(BASE_URL, ' ===> ', base_url)
            // Fetch the component file
            fetch(`${BASE_URL}components/${component}/${component}.html?v=${BUILD_VERSION}`, {
              mode: 'no-cors'
            })
            .then(response => response.text())
            .then(html => {
                // Replace the placeholders with the actual data
                const replacedHtml = this.replacePlaceholders(html, data);
                
                // Find the custom HTML tag in the document
                const customTag = document.querySelector(component);
        
                // Create a template element and populate it with the replaced HTML content
                const template = document.createElement('template');
                template.innerHTML = replacedHtml;
        
                // Replace the custom HTML tag with the content from the template
                customTag.replaceWith(template.content);
                 
            })
            .catch(error => console.log(error));
        });
    }

      // Helper function to replace placeholders with data
     replacePlaceholders(html, data) {
        let replacedHtml = html;
        for (const key in data) {
        if (data.hasOwnProperty(key)) {
            const placeholder = `{{${key}}}`;
            const value = data[key];
            replacedHtml = replacedHtml.replace(new RegExp(placeholder, 'g'), value);
        }
        }
        return replacedHtml;
    }

    static replacePlaceholders(html, data) {
      let replacedHtml = html;
      for (const key in data) {
      if (data.hasOwnProperty(key)) {
          const placeholder = `{{${key}}}`;
          const value = data[key];
          replacedHtml = replacedHtml.replace(new RegExp(placeholder, 'g'), value);
      }
      }
      return replacedHtml;
  }


  
   

    static populateComponent({ component, data }, basePath = '.') {
        // console.log(component, data);
      
        // Create an array to store the fetch promises
        const fetchPromises = [];
      
        data.forEach(data => {
          const promise = fetch(`${BASE_URL}components/${component}/${component}.html?v=${BUILD_VERSION}`, {
            mode: 'no-cors'
          })
            .then(response => response.text())
            .then(html => {
              // Replace the placeholders with the actual data
              return this.replacePlaceholders(html, data);
            })
            .catch(error => console.log(error));
      
          fetchPromises.push(promise);
        });

        // Wait for all the fetch promises to complete
        return Promise.all(fetchPromises)
          .then(outputElements => {
            return outputElements.join(''); // Join the output elements into a single string
          });
      }

    static makeVarGlobal(obj) {
      if (typeof obj == 'object')
        for (const [key, value] of Object.entries(obj)) {
          // console.log(`${key}: ${value}`);
            const scriptElement = document.createElement('script');
            scriptElement.innerText = `var ${key} = ${JSON.stringify(value)}`;
            document.head.appendChild(scriptElement);
        }
      }
      

   

  }
  
 