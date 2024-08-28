import React from 'react';

const Testimonial = () => {
  return (
    <section className="py-16 bg-gray-100">
      <div className="container mx-auto text-center">
        <h2 className="text-4xl font-bold mb-12 font-poppins text-deep-muted-blue">
          What Our Users Say
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div className="bg-white shadow-lg rounded-lg p-6 transform transition-transform duration-300 hover:scale-105">
            <p className="text-deep-muted-blue-light italic mb-4">
              "This app has simplified my life in ways I couldn't imagine. Highly recommend!"
            </p>
            <p className="text-darker-shade-blue font-semibold">- Alex P.</p>
          </div>
          <div className="bg-white shadow-lg rounded-lg p-6 transform transition-transform duration-300 hover:scale-105">
            <p className="text-deep-muted-blue-light italic mb-4">
              "A game-changer for my business. Easy to use and very reliable."
            </p>
            <p className="text-darker-shade-blue font-semibold">- Maria S.</p>
          </div>
          <div className="bg-white shadow-lg rounded-lg p-6 transform transition-transform duration-300 hover:scale-105">
            <p className="text-deep-muted-blue-light italic mb-4">
              "Fantastic customer support and a very intuitive interface."
            </p>
            <p className="text-darker-shade-blue font-semibold">- John D.</p>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Testimonial;