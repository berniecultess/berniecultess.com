import React from "react";
import logo from "./logo.svg";
import "./App.css";
// import rtc from "../../sites/wp/rtc";

function App() {
    const rtc = "http://localhost:8888/wp/rtc/";
    const rtc_admin = "http://localhost:8888/wp/rtc/wp-admin";
    return (
        <div className="App">
            <header className="App-header">
                <img src={logo} className="App-logo" alt="logo" />
                <p>
                    Edit <code>src/App.js</code> and save to reload.
                </p>
                <p>
                    <a href={rtc} target="_blank" rel="noopener noreferrer">
                        rt Camp WordPress
                    </a>
                </p>
                <p>
                    <a
                        href={rtc_admin}
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        rt Camp WordPress Admin
                    </a>
                </p>
            </header>
        </div>
    );
}

export default App;
