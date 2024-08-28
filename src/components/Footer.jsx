// Footer.jsx
import React, { useState } from "react";
import {
  FaEnvelope,
  FaFacebook,
  FaInstagram,
  FaMapMarkerAlt,
} from "react-icons/fa";
import TermsModal from "./TermsModal"; // Import the TermsModal component
import PrivacyModal from "./PrivacyModal";

const Footer = () => {
  const [isTermsModalOpen, setIsTermsModalOpen] = useState(false);
  const [isPrivacyModalOpen, setIsPrivacyModalOpen] = useState(false);

  const openTermsModal = () => setIsTermsModalOpen(true);
  const closeTermsModal = () => setIsTermsModalOpen(false);

  const openPrivacyModal = () => setIsPrivacyModalOpen(true);
  const closePrivacyModal = () => setIsPrivacyModalOpen(false);

  return (
    <footer className="w-full bg-darker-shade-blue text-white py-8">
      <div className="container mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        {/* Company Information */}
        <div>
          <h1 className="text-2xl font-bold mb-4 font-poppins">Asantetip</h1>
          <p className="text-sm font-sans">
            © 2024 Asantetip. All rights reserved.
          </p>
        </div>

        {/* Navigation Links */}
        <div>
          <h2 className="text-xl font-semibold mb-4 font-poppins">
            Navigation
          </h2>
          <nav className="flex flex-col space-y-2">
            <a
              href="/"
              className="hover:text-deep-muted-blue-light transition-colors duration-300 font-sans"
            >
              Home
            </a>
            <a
              href="/about"
              className="hover:text-deep-muted-blue-light transition-colors duration-300 font-sans"
            >
              About
            </a>
            <a
              href="/services"
              className="hover:text-deep-muted-blue-light transition-colors duration-300 font-sans"
            >
              Services
            </a>
            <button
              onClick={openTermsModal}
              className="hover:text-deep-muted-blue-light transition-colors duration-300 font-sans text-left"
            >
              Terms & Conditions
            </button>
            <button
              onClick={openPrivacyModal}
              className="hover:text-deep-muted-blue-light transition-colors duration-300 font-sans text-left"
            >
              Privacy Policy
            </button>
          </nav>
        </div>

        {/* Social Media Icons */}
        <div>
          <h2 className="text-xl font-semibold mb-4 font-poppins">Follow Us</h2>
          <div className="flex space-x-4">
            <a
              href="https://www.facebook.com/profile.php?id=100088309046962"
              className="hover:text-deep-muted-blue-light transition-colors duration-300"
            >
              <FaFacebook className="w-6 h-6" />
            </a>
            <a
              href="https://www.instagram.com/tipasante/"
              className="hover:text-deep-muted-blue-light transition-colors duration-300"
            >
              <FaInstagram className="w-6 h-6" />
            </a>
          </div>
        </div>

        {/* Contact Information */}
        <div>
          <h2 className="text-xl font-semibold mb-4 font-poppins">
            Contact Us
          </h2>
          <div className="flex items-center mb-2">
            <FaMapMarkerAlt className="mr-2 text-deep-muted-blue-light" />
            <p className="text-sm font-sans">H21, Home Scene Building</p>
          </div>
          <div className="flex items-center mb-2">
            <FaMapMarkerAlt className="mr-2 text-deep-muted-blue-light" />
            <p className="text-sm font-sans">Healthscape, Forbach Mauritius</p>
          </div>
          <div className="flex items-center">
            <FaEnvelope className="mr-2 text-deep-muted-blue-light" />
            <a href="mailto:info@asantetip.com" className="text-sm font-sans">
              info@asantetip.com
            </a>
          </div>
        </div>
      </div>

      {/* Footer Bottom Text */}
      <div className="container mx-auto px-4 mt-8">
        <p className="text-lg text-white mb-6">
          Transform your appreciation into a powerful force with AsanteTip.
          Download now and embark on a journey of seamless tipping, financial
          control, and heartfelt expressions of gratitude. AsanteTip — where
          every 'thank you' becomes a celebration!
        </p>
        <p className="text-lg text-white mb-4">
          Connect with us for any queries or concerns. We value your feedback.
        </p>
      </div>

      {/* Terms and Conditions Modal */}
      <TermsModal show={isTermsModalOpen} handleClose={closeTermsModal} />
      {/* Privacy Policy Modal */}
      <PrivacyModal show={isPrivacyModalOpen} handleClose={closePrivacyModal} />
    </footer>
  );
};

export default Footer;
