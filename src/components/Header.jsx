// Header component with improved visibility settings
import React, { useState, useEffect } from 'react';
import logo from '../images/Logo.png';
import { FaBars, FaTimes } from 'react-icons/fa';

const Header = ({ bgColor = 'bg-transparent' }) => {
  const [isOpen, setIsOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);

  const toggleMenu = () => {
    setIsOpen(!isOpen);
  };

  useEffect(() => {
    const handleScroll = () => {
      const offset = window.scrollY;
      if (offset > 80) {
        setScrolled(true);
      } else {
        setScrolled(false);
      }
    };

    window.addEventListener('scroll', handleScroll);
    return () => {
      window.removeEventListener('scroll', handleScroll);
    };
  }, []);

  return (
    <header className={`fixed top-0 z-20 w-full font-sans transition-colors duration-300 ${scrolled ? 'bg-deep-muted-blue text-white' : `${bgColor} text-white`}`}>
      <div className="container mx-auto flex justify-between items-center p-4">
        <div className="bg-white p-1 rounded">
          <img src={logo} alt="Logo" className="h-8 w-auto" />
        </div>
        <nav className="hidden md:flex space-x-4">
          <a href="/" className="hover:text-deep-muted-blue-light">Home</a>
          <a href="/services" className="hover:text-deep-muted-blue-light">Services</a>
          <a href="/blog" className="hover:text-deep-muted-blue-light">Blog</a>
        </nav>
        <div className="md:hidden">
          <button onClick={toggleMenu} className="focus:outline-none" aria-label="Toggle menu">
            {isOpen ? <FaTimes className="w-6 h-6" /> : <FaBars className="w-6 h-6" />}
          </button>
        </div>
      </div>
      {isOpen && (
        <div className="md:hidden">
          <nav className="flex flex-col space-y-2 p-4">
            <a href="/" className="hover:text-deep-muted-blue-light">Home</a>
            <a href="/services" className="hover:text-deep-muted-blue-light">Services</a>
            <a href="/blog" className="hover:text-deep-muted-blue-light">Blog</a>
          </nav>
        </div>
      )}
    </header>
  );
};

export default Header;
