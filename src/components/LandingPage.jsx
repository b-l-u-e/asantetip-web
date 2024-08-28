import React, { useEffect, useState } from "react";
import VideoPlayer from "./VideoPlayer";
import Header from "./Header";
import { FaArrowDown } from "react-icons/fa"; // Import the arrow icon from react-icons
import Content from "./Content";
import VideoModal from "./VideoModal";

const LandingPage = () => {
  const videoUrl =
    "https://res.cloudinary.com/domdlvos5/video/upload/v1724608084/pb6zfedkncqkdtk7xnag.mp4";

  const [isModalOpen, setIsModalOpen] = useState(false);
  const openModal = () => {
    setIsModalOpen(true);
  };

  const closeModal = () => {
    setIsModalOpen(false);
  };

  // Effect to handle scroll event and add fade-in effect
  useEffect(() => {
    const belowContentSection = document.getElementById("belowContent");

    const handleScroll = () => {
      const landingPageBottom = document
        .querySelector(".landingPage")
        .getBoundingClientRect().bottom;
      if (landingPageBottom < window.innerHeight) {
        belowContentSection.classList.add("opacity-100");
      } else {
        belowContentSection.classList.remove("opacity-100");
      }
    };

    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  return (
    <>
      <div className="relative h-screen landingPage">
        {/* video background */}
        <VideoPlayer videoUrl={videoUrl} />

        {/* header */}
        <Header />

        {/* overlay content */}
        <div className="relative z-10 flex flex-col items-center justify-center h-full bg-black bg-opacity-50 text-white text-center px-4">
          <h1 className="text-4xl font-bold mb-4 font-poppins">
            Simplicity is just one click away.
          </h1>
          <p className="text-lg mb-6 font-sans">
            A vision to transport users into a world where apps were not only
            simple to use, but also made people's lives better as well.
          </p>
          <div className="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
            <button
              onClick={() =>
                (window.location.href = "https://app.asantetip.com/")
              }
              className="bg-deep-muted-blue-light text-white py-2 px-4 rounded hover:bg-deep-muted-blue transition-colors duration-300"
            >
              Sign in as business user
            </button>
            <button
              onClick={() =>
                (window.location.href = "https://app.asantetip.com/app")
              }
              className="bg-deep-muted-blue-light text-white py-2 px-4 rounded hover:bg-deep-muted-blue transition-colors duration-300"
            >
              Sign in as user
            </button>

            <button
              onClick={openModal}
              className="cursor-pointer bg-transparent border border-white text-white py-2 px-4 rounded hover:bg-white hover:text-deep-muted-blue-light transition-colors duration-300"
            >
              Watch full video
            </button>
            <VideoModal
              isOpen={isModalOpen}
              onRequestClose={closeModal}
              videoUrl={videoUrl}
            />
          </div>
          {/* Arrow icon to indicate scrolling down */}
          <FaArrowDown
            className="w-10 h-10 mt-8 text-white animate-bounce cursor-pointer"
            onClick={() =>
              document
                .getElementById("belowContent")
                .scrollIntoView({ behavior: "smooth" })
            }
          />
        </div>

        {/* Overlay to darken the video */}
        <div className="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
      </div>

      {/* Use the BelowContent component */}
      <Content />
    </>
  );
};

export default LandingPage;
