import React from 'react';
import Header from '../components/Header';
import featureOne from '../images/home.svg';
import featureTwo from '../images/statement.svg';
import featureThree from '../images/tip-server.svg';
import featureFour from '../images/deposit.png';

const Services = () => {
  return (
    <div className="relative">
      {/* Pass bgColor to Header to ensure it has the correct background */}
      <Header bgColor="bg-deep-muted-blue" />
      <section className="min-h-screen bg-white pt-16">
        <div className="container mx-auto py-12">
          <h2 className="text-4xl font-bold mb-12 font-poppins text-deep-muted-blue text-center">
            How Our App Works
          </h2>
          <div className="space-y-16">
            <div className="flex flex-col md:flex-row items-center bg-white shadow-lg rounded-lg p-8">
              <img src={featureOne} alt="Dashboard" className="w-full md:w-1/2 h-80 object-contain rounded-md mb-6 md:mb-0 md:mr-8" />
              <div className="md:w-1/2">
                <h3 className="text-3xl font-semibold text-darker-shade-blue mb-4">Dashboard</h3>
                <p className="text-lg text-deep-muted-blue-light">
                  The AsanteTip dashboard is designed for simplicity and efficiency, ensuring that every interaction is a seamless expression of gratitude. Experience the power of digital tipping and financial control in one centralized hub. Login to AsanteTip now and transform the way you say 'Asante' – thank you!
                </p>
              </div>
            </div>
            <div className="flex flex-col md:flex-row-reverse items-center bg-white shadow-lg rounded-lg p-8">
              <img src={featureTwo} alt="Balance and Statements" className="w-full md:w-1/2 h-80 object-contain rounded-md mb-6 md:mb-0 md:ml-8" />
              <div className="md:w-1/2">
                <h3 className="text-3xl font-semibold text-darker-shade-blue mb-4">Balance and Statements</h3>
                <p className="text-lg text-deep-muted-blue-light">
                  Your bank statement allows the user to see the tip wallet balances and all previous transactions. Stay financially informed with the "Bank Statements" feature. Access a comprehensive overview of your transactions, ensuring transparency and control over your digital tipping history.
                </p>
              </div>
            </div>
            <div className="flex flex-col md:flex-row items-center bg-white shadow-lg rounded-lg p-8">
              <img src={featureThree} alt="Scan QR Code" className="w-full md:w-1/2 h-80 object-contain rounded-md mb-6 md:mb-0 md:mr-8" />
              <div className="md:w-1/2">
                <h3 className="text-3xl font-semibold text-darker-shade-blue mb-4">Scan QR Code</h3>
                <p className="text-lg text-deep-muted-blue-light">
                  Simply present your unique QR code to your client to scan in order to receive a tip. Scan the QR code of a server for an individual tip or an organization for a team tip. The app recognizes the code, making tipping as simple as pointing and confirming.
                </p>
              </div>
            </div>
            <div className="flex flex-col md:flex-row-reverse items-center bg-white shadow-lg rounded-lg p-8">
              <img src={featureFour} alt="Tip Wallet" className="w-full md:w-1/2 h-80 object-contain rounded-md mb-6 md:mb-0 md:ml-8" />
              <div className="md:w-1/2">
                <h3 className="text-3xl font-semibold text-darker-shade-blue mb-4">Tip Wallet</h3>
                <p className="text-lg text-deep-muted-blue-light">
                  To add funds to your tip wallet can be done using your credit card, mobile money or bank account. Using the secure credit card protected facility can easily add funds to your wallet. These deposit facilities vary country by country.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
};

export default Services;