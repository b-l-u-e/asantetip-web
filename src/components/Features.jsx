import React, { useEffect, useRef, useState } from "react";
import { FaArrowRight } from "react-icons/fa";
import login from "../images/login@1x.svg";
import step1 from "../images/create account.svg"; // Example image imports
import step2 from "../images/setup-pin.svg";
import step3 from "../images/home.svg";

const Features = () => {
  const contentRef = useRef(null);
  const [showRoadmap, setShowRoadmap] = useState(false);

  // Smooth scroll to "How it works" section and show roadmap
  const handleScrollToContent = () => {
    setShowRoadmap(true);
  };

  useEffect(() => {
    if (showRoadmap) {
      const roadmapElement = document.getElementById("roadmapSection");
      if (roadmapElement) {
        roadmapElement.scrollIntoView({
          behavior: "smooth",
        });
      }
    }
  }, [showRoadmap]);

  useEffect(() => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('opacity-100');
          } else {
            entry.target.classList.remove('opacity-100');
          }
        });
      },
      {
        threshold: 0.1,
      }
    );

    const currentRef = contentRef.current;

    if (currentRef) {
      observer.observe(currentRef);
    }

    return () => {
      if (currentRef) {
        observer.unobserve(currentRef);
      }
    };
  }, []);

  return (
    <section
      id="belowContent"
      ref={contentRef}
      className="content-section bg-gradient-to-b from-white via-gray-100 to-gray-200 py-20 transition-opacity duration-1000 opacity-0 w-full"
    >
      <div className="max-w-6xl mx-auto space-x-10">
        {/* Features Section */}
        <div className="flex flex-col md:flex-row items-center text-center md:text-left">
          <div className="md:w-1/2 md:pr-8 md:mb-6">
            <h2 className="text-4xl font-bold mb-6 font-poppins text-deep-muted-blue">
              How it works?
            </h2>
            <p className="text-lg mb-6 text-gray-600">
              Easily start using AsanteTip by signing up as a user. Restaurants,
              hotels, tours, and other business companies can sign up as
              business users.
            </p>
            <button
              onClick={handleScrollToContent}
              className="bg-deep-muted-blue text-white py-3 px-6 rounded-full hover:bg-deep-blue-dark transition-colors duration-300 mb-6"
            >
              Get Started
            </button>
          </div>
          <div className="md:w-96 mx-auto">
            <img
              src={login} // Use the path to the uploaded image
              alt="Visual representation of account creation and login"
              className="w-full"
            />
          </div>
        </div>

        {/* Roadmap Section */}
        {showRoadmap && (
          <div id="roadmapSection" className="mt-10">
            <h2 className="text-3xl font-bold mb-6 text-center text-deep-muted-blue">
              Roadmap to Using AsanteTip
            </h2>
            <div className="flex flex-col items-center space-y-10">
              <div className="flex flex-col md:flex-row items-center md:space-x-10">
                <div className="md:w-1/3">
                  <img src={step1} alt="Step 1" className="w-full" />
                  <p className="text-center mt-4 text-gray-600">Step 1: Sign Up</p>
                </div>
                <div className="hidden md:block md:w-1/6 text-center">
                  <FaArrowRight className="w-12 h-12 text-deep-muted-blue" />
                </div>
                <div className="md:w-1/3">
                  <img src={step2} alt="Step 2" className="w-full" />
                  <p className="text-center mt-4 text-gray-600">Step 2: Create Profile</p>
                </div>
                <div className="hidden md:block md:w-1/6 text-center">
                  <FaArrowRight className="w-12 h-12 text-deep-muted-blue" />
                </div>
                <div className="md:w-1/3">
                  <img src={step3} alt="Step 3" className="w-full" />
                  <p className="text-center mt-4 text-gray-600">Step 3: Start Using</p>
                </div>
              </div>
              <div className="block md:hidden">
                <FaArrowRight className="w-12 h-12 text-deep-muted-blue mx-auto" />
              </div>
              <div className="block md:hidden">
                <FaArrowRight className="w-12 h-12 text-deep-muted-blue mx-auto" />
              </div>
            </div>
          </div>
        )}
      </div>
    </section>
  );
};

export default Features;