
# WebServ HTTP Server

An in-depth project exploring server-side programming through the development of a custom HTTP server in **C++**.  
The focus was on implementing **CGI (Common Gateway Interface)** execution and **HTTP POST request handling**, including file uploads and inter-process communication.  

---

## 🚀 Features

- **CGI Engine Development**  
  - Full CGI execution system with support for PHP and Python scripts  
- **POST Method Implementation**  
  - Form data handling  
  - File uploads with multipart content parsing  
- **Process Management**  
  - Safe `fork/exec` patterns  
  - Cleanup and zombie prevention  
- **Inter-Process Communication**  
  - Pipe-based bidirectional communication between server and CGI scripts  
- **Upload System**  
  - File upload handling with path validation and size limits  

---

## 🔧 Technical Highlights

- Environment variable setup for CGI (`CONTENT_LENGTH`, `REQUEST_METHOD`, `QUERY_STRING`, etc.)  
- Timeout management to prevent hanging scripts  
- Signal handling for graceful process termination  
- Handling both binary and text data uploads  
- Memory-efficient streaming for large file uploads  

---

## 📚 What I Learned

Building the CGI implementation was an excellent experience in **systems programming**:  
- Bridging our C++ server with scripting languages (PHP, Python)  
- Setting up execution environments and managing process lifecycles  
- Designing secure and efficient communication between parent and child processes  

The **file upload feature** was especially challenging and rewarding. It required:  
- Parsing multipart form data  
- Validating file types  
- Ensuring secure storage  
- Following best practices in web security and data handling  

---

## 👥 Team

- **Amine Bouramtane** → CGI engine, POST requests, file uploads, process management  
- **Yassine Imizare** → Server foundation & multiplexing  
- **Soufyane Marsi** → GET/DELETE implementation & session management  

---

## 📂 Installation & Usage

```bash
# Clone the repository
git clone https://github.com/Aminebouramtane/webserv.git
cd webserv

# Build the project
make

# Run the server
./webserv [config_file]
```


