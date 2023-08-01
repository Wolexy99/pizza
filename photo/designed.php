*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    background: black;
    min-height: 100vh;
}

.box{
    position: relative;
    width: 370px;
    height: 450px;
    background: #1c1c1c;
    border-radius: 50px 5px;
    overflow: hidden;
}

.box::before{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 370px;
    height: 450px;
    background: linear-gradient(60deg, transparent, #45f3ff, #45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    
}

.box::after{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 370px;
    height: 450px;
    background: linear-gradient(60deg, transparent, #d9138a, #d9138a);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
}

@keyframes animate{
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}

form{
    position: absolute;
    inset: 5px;
    border-radius: 50px 5px;
    background: #28292d;
    z-index: 10;
    padding: 30px 30px;
    flex-direction: column;
    display: flex;
}

h2{
    color: lightblue;
    font-size: 35px;
    font-weight: 500;
    text-align: center;
}

.inputBox{
    position: relative;
    width: 300px;
    margin-top: 35px;
}

.inputBox input{
    position: relative;
    width: 100%;
    padding: 20px 10px 10px;
    background: transparent;
    border: none;
    outline: none;
    color: #23242a;
    font-size: 1em;
    letter-spacing: 0.05em;
    z-index: 10;
}

input[type="submit"]{
    font-size: 20px;
    border: none;
    outline: none;
    background: #45f3ff;
    padding: 5px;
    border-radius: 90px;
    font-weight: 600;
    cursor: pointer;
    margin: 30px;
}

input[type="submit"]:active{
    background: linear-gradient(90deg, #45f3ff, #d9138a);
    opacity: 0.8;
}

.inputBox span{
    position: absolute;
    left: 0;
    padding: 20px 10px 10px;
    font-size: 1em;
    color: #8f8f8f;
    pointer-events: none;
    letter-spacing: 0.05em;
    transition: 0.5s;
}

.inputBox input:valid ~ span,
.inputBox input:focus ~ span{
    color: #45f3ff;
    transform: translateX(-10px) translateY(-30px);
    font-size: 0.75em;
}

.inputBox i{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #45f3ff;
    border-radius: 4px;
    transition: 0.5s;
    pointer-events: none;
    z-index: 9;
}

.inputBox input:valid ~ i,
.inputBox input:focus ~ i{
    height: 44px;
}

.links{
    display: flex;
    justify-content: space-between;
}

.links a{
    margin: 25px 0;
    font-size: 1em;
    color: #8f8f8f;
    text-decoration: none;
}

.links a:hover,
.links a:nth-child(2){
    color: #45f3ff;
}

.links a:nth-child(2):hover{
    text-decoration: underline 2px;
    text-underline-offset: 5px;
}