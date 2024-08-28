import React, { useState } from 'react';
import { FaPlusSquare, FaMinusSquare } from 'react-icons/fa';

const FAQ = () => {
  const [activeIndex, setActiveIndex] = useState(null);

  const toggleQuestion = (index) => {
    setActiveIndex(activeIndex === index ? null : index);
  };

  const questions = [
    {
      question: "How do I tip a server using AsanteTip?",
      answer: "To tip a server, simply scan their unique QR code or manually enter their details in the app. Choose the amount you want to tip, confirm the transaction, and your gratitude will be sent directly to the server."
    },
    {
      question: "Can I tip an entire team or organization?",
      answer: "Absolutely! AsanteTip allows you to tip entire teams or organizations. Just scan their dedicated QR code, select the team option, and distribute your gratitude among the deserving individuals."
    },
    {
      question: "How can I check my tipping history and transactions?",
      answer: "You can monitor your tipping history and transactions in the 'Bank Statements' section of the app. It provides a comprehensive overview of your past transactions, ensuring transparency and control over your tipping activity."
    },
    {
      question: "Is AsanteTip secure?",
      answer: "Yes, AsanteTip prioritizes the security of your transactions. All interactions are conducted with top-notch encryption, ensuring a secure and transparent digital tipping experience."
    },
    {
      question: "How do I contact customer support?",
      answer: "If you have any questions or need assistance, you can reach out to our customer support team. Find our contact information in the app or visit our support center on the website for personalized assistance."
    },
    {
      question: "Can I withdraw funds from my AsanteTip wallet?",
      answer: "Yes, you can withdraw funds from your wallet. Navigate to the 'Withdraw' option, specify the withdrawal amount and method, and confirm the transaction to transfer funds to your linked account."
    }
  ];

  return (
    <section className="py-8 bg-gray-100">
      <div className="max-w-4xl mx-auto px-4">
        <h2 className="text-3xl font-bold text-center mb-8">FAQs</h2>
        {questions.map((item, index) => (
          <div key={index} className="mb-4 border-b border-gray-300 pb-4">
            <div className="flex justify-between items-center cursor-pointer" onClick={() => toggleQuestion(index)}>
              <p className="text-lg font-medium">{item.question}</p>
              <button className="text-xl text-deep-muted-blue">
                {activeIndex === index ? <FaMinusSquare /> : <FaPlusSquare />}
              </button>
            </div>
            {activeIndex === index && <div className="mt-2 pl-6 text-gray-700"><p>{item.answer}</p></div>}
          </div>
        ))}
      </div>
    </section>
  );
};

export default FAQ;