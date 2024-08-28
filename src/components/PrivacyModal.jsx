import React from "react";

const PrivacyModal = ({ show, handleClose }) => {
  if (!show) return null; // Return null if modal is not shown

  return (
    <div className="fixed inset-0 flex items-center justify-center bg-deep-muted-blue bg-opacity-50 z-50">
      <div className="bg-white rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-1/2 max-h-full overflow-y-auto">
        {/* Modal Header */}
        <div className="flex justify-between items-center border-b p-4">
          <h2 className="text-xl font-semibold">Privacy Policy</h2>
          <button
            onClick={handleClose}
            className="text-gray-500 hover:text-gray-800"
          >
            &times;
          </button>
        </div>
        {/* Modal Content */}
        <div className="p-6">
          <h3 className="text-lg font-medium mb-4 text-deep-muted-blue">
            PRIVACY POLICY
          </h3>
          <p className="mb-4 text-gray-700">
            This privacy policy governs your use of the software application
            AsanteTip (“Application”) for mobile devices that was created by
            Wild Luxury Travel Ltd. The Application lets users easily tip
            service industry professionals anywhere and anytime, especially
            those in industries that often don't receive well deserved tips.
            It's particularly convenient for users who usually don't carry cash
            and the service industry professionals who don't accept credit cards
            directly.
          </p>
          <h4 className="text-md font-medium mb-2 text-deep-muted-blue">
            What information does the application obtain and how is it used?
          </h4>
          <p className="mb-4 text-gray-700">
            <strong>User Provided Information:</strong> The Application obtains
            the information you provide when you download and register the
            Application. Registration with us is optional. However, please keep
            in mind that you may not be able to use some of the features offered
            by the Application unless you register with us.
          </p>
          <p className="mb-4 text-gray-700">
            When you register with us and use the Application, you generally
            provide (a) your name, email address, user name and other
            registration information; (b) transaction-related information, such
            as when you send or receive tips, respond to any offers, or download
            or use applications from us; (c) information you provide us when you
            contact us for help; (d) credit card information for sending tips
            and use of the Application, and; (e) information you enter into our
            system when using the Application, such as contact information
            banking details and mobile money details.
          </p>
          <p className="mb-4 text-gray-700">
            We may also use the information you provided us to contact you from
            time to time to provide you with important information, required
            notices and marketing promotions.
          </p>
          <h4 className="text-md font-medium mb-2 text-deep-muted-blue">
            Automatically collected information
          </h4>
          <p className="mb-4 text-gray-700">
            You agree that Application Provider may collect and use technical
            data and related information, including but not limited to technical
            information about Your device, system and application software, and
            peripherals, that is gathered periodically to facilitate the
            provision of software updates, product support and other services to
            You (if any) related to the Licensed Application. Application
            Provider may use this information, as long as it is in a form that
            does not personally identify You, to improve its products or to
            provide services or technologies to You, with the exceptions covered
            in our <a className="text-deep-muted-blue" href="https://asantetip.com/privacy">Privacy Policy</a>, such as
            suspected fraud when a transaction is disputed as covered in section
            j) below.
          </p>
          <p className="mb-4">
            For the full privacy content, please visit our
            <a
              href="/privacy"
              className="text-deep-muted-blue underline hover:text-deep-muted-blue-light"
            >
              Privacy page
            </a>
            .
          </p>
        </div>

        {/* Modal Footer */}
        <div className="flex justify-end p-4 border-t">
          <button
            onClick={handleClose}
            className="px-4 py-2 bg-deep-muted-blue text-white rounded hover:bg-deep-muted-blue-light focus:outline-none focus:ring-2 focus:ring-blue-500"
          >
            Close
          </button>
        </div>
      </div>
    </div>
  );
};

export default PrivacyModal;
