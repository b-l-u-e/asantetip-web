import React, { useEffect, useRef } from "react";
import Features from "./Features";
import Testimonial from "./Testimonial";
import FAQ from "./FAQ";

const Content = () => {
  const contentRef = useRef(null);

  useEffect(() => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("opacity-100");
          } else {
            entry.target.classList.remove("opacity-100");
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
      className="content-section bg-gradient-to-b from-white via-gray-100 to-gray-200 py-20 transition-opacity duration-1000 opacity-0"
    >
      <div className="max-w-6xl mx-auto px-6 text-center">
        {/* Features Section */}
        <h2 className="text-4xl font-bold mb-12 font-poppins text-deep-muted-blue">
          Why Choose Our App?
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
          <div className="bg-white shadow-lg rounded-lg p-8 transform transition-transform duration-300 hover:scale-105">
            <h3 className="text-2xl font-semibold mb-4 font-poppins text-darker-shade-blue">
              Easily express your gratitude with digital tipping.
            </h3>
            <p className="text-deep-muted-blue-light">
              Our app allows you to scan the server's unique QR code to tip them
              directly. No more searching for cash or struggling with math –
              just scan, tip, and say thank you.
            </p>
          </div>
          <div className="bg-white shadow-lg rounded-lg p-8 transform transition-transform duration-300 hover:scale-105">
            <h3 className="text-2xl font-semibold mb-4 font-poppins text-darker-shade-blue">
              Versatile Payment Methods
            </h3>
            <p className="text-deep-muted-blue-light">
              AsanteTip enables you to load your tipping wallet with a variety
              of payment methods. Whether it's credit cards, digital wallets, or
              even bank transfers, you can fund your tipping wallet your way.
            </p>
          </div>
          <div className="bg-white shadow-lg rounded-lg p-8 transform transition-transform duration-300 hover:scale-105">
            <h3 className="text-2xl font-semibold mb-4 font-poppins text-darker-shade-blue">
              Multiple Tipping Options
            </h3>
            <p className="text-deep-muted-blue-light">
              With AsanteTip, you have the flexibility to tip your servers in
              multiple ways. Whether you prefer a one-time, single tip, or want
              to distribute your gratitude among the staff, AsanteTip has you
              covered.
            </p>
          </div>
        </div>
      </div>

      {/* Call to Action */}
      <Features />

      {/* Testimonials Section */}
      <Testimonial />

      <FAQ />
    </section>
  );
};

export default Content;
