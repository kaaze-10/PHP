<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: linear-gradient(135deg, #0e173fff 0%, #15494bff 100%);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-box {
    background: linear-gradient(135deg, #2a3460ff 0%, #244748ff 100%);;
    padding: 40px;
    border-radius: 10px;    
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
}

.login-box form {
    display: flex;
    flex-direction: column;
}

.login-box label {
    margin-bottom: 8px;
    color: #dadadaff;
    font-weight: 500;
}

.login-box input {
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    transition: border-color 0.3s;
    margin-bottom: 5px;
}

.login-box input:focus {
    outline: none;
    border-color: #667eea;
}

.login-box button {
    padding: 12px;
    background: linear-gradient(135deg,  #003d41ff 30%, #0e173fff 100%);
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.2s;
}

.login-box button:hover {
    transform: translateY(-2px);
}

.login-box p {
    text-align: center;
    margin-top: 15px;
    color: #dadadaff;
}

.login-box a {
    color: #667eea;
    text-decoration: none;
}

.login-box a:hover {
    text-decoration: underline;
}
</style>




<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    background: rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    color: white;
    width: 100%;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #0e173fff 0%, #15494bff 100%);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex: 1;
}

.login-container {
    background: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
}

.login-container h1 {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
    font-size: 28px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #555;
    font-weight: 500;
}

.form-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.form-group input:focus {
    outline: none;
    border-color: #667eea;
}

.login-btn {
    width: 100%;
    padding: 12px;
    background: linear-gradient(135deg, #0e173fff 0%, #15494bff 100%);
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.2s;
}

.login-btn:hover {
    transform: translateY(-2px);
}

footer {
    background: rgba(0, 0, 0, 0.2);
    padding: 20px;
    text-align: center;
    color: white;
    width: 100%;
}
</style>

