// TermsModal.jsx
import React from "react";

const TermsModal = ({ show, handleClose }) => {
  if (!show) return null; // Return null if modal is not shown

  return (
    <div className="fixed inset-0 flex items-center justify-center bg-deep-muted-blue bg-opacity-50 z-50">
      <div className="bg-white rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-1/2 max-h-full overflow-y-auto">
        {/* Modal Header */}
        <div className="flex justify-between items-center border-b p-4">
          <h2 className="text-xl font-semibold">Terms and Conditions</h2>
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
            LICENSED APPLICATION END USER AGREEMENT
          </h3>
          <p className="mb-4 text-gray-700">Last modified July 9, 2022</p>
          <p className="mb-4 text-gray-700">
            The Products transacted through the Service are licensed, not sold,
            to You for use only under the terms of this license, unless a
            Product is accompanied by a separate license agreement, in which
            case the terms of that separate license agreement will govern,
            subject to Your prior acceptance of that separate license agreement.
            The licensor (“Application Provider”) reserves all rights not
            expressly granted to You. The Product that is subject to this
            license is referred to in this license as the “Licensed
            Application.”
          </p>
          <h3 className="text-lg font-medium mb-4 text-deep-muted-blue">
            A: SCOPE OF LICENSE
          </h3>
          <p className="mb-4 text-gray-700">
            This license granted to You for the Licensed Application by
            Application Provider is limited to a non-transferable license to use
            the Licensed Application on any mobile device, such as an iPhone,
            iPad or Android device that You own or control and as permitted by
            the Usage Rules set forth in the “Usage Rules” Section of the App
            Store Terms and Conditions.
          </p>
          {/* Continue with the rest of the terms */}
          <p className="mb-4 text-gray-700">
            This license does not allow You to use the Licensed Application on
            any mobile device that You do not own or control, and You may not
            distribute or make the Licensed Application available over a network
            where it could be used by multiple devices at the same time. You may
            not rent, lease, lend, sell, redistribute or sublicense the Licensed
            Application.
          </p>
          <p className="mb-4 text-gray-700">
            You may not copy (except as expressly permitted by this license and
            the Usage Rules), decompile, reverse engineer, disassemble, attempt
            to derive the source code of, modify, or create derivative works of
            the Licensed Application, any updates, or any part thereof (except
            as and only to the extent any foregoing restriction is prohibited by
            applicable law or to the extent as may be permitted by the licensing
            terms governing use of any open sourced components included with the
            Licensed Application).
          </p>
          <p className="mb-4">
            For the full terms and conditions, please visit our
            <a
              href="/terms"
              className="text-deep-muted-blue underline hover:text-deep-muted-blue-light"
            >
              Terms and Conditions page
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

export default TermsModal;
