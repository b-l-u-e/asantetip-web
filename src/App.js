import React from "react";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Footer from "./components/Footer";
import Home from "./pages/Home";
import Services from "./pages/Services";
import Terms from "./pages/Terms";
import Privacy from "./pages/Privacy";


const App = () => {
  return (
    <Router>
      <div className="flex flex-col min-h-screen">
        <main className="flex-grow">
        <Routes>
            <Route path="/" element={<Home />} />
            {/* <Route path="/about" element={<About />} /> */}
            <Route path="/services" element={<Services/>} />
            <Route path="/terms" element={<Terms />} />
            <Route path="/privacy" element={<Privacy />} />
          </Routes>
        </main>
        <Footer />
      </div>
    </Router>
  );
};

export default App;
