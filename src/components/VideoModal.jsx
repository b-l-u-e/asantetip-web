import React from 'react';
import Modal from 'react-modal';

Modal.setAppElement('#root'); // Set the app element for accessibility

const VideoModal = ({ isOpen, onRequestClose, videoUrl }) => {
  return (
    <Modal
      isOpen={isOpen}
      onRequestClose={onRequestClose}
      contentLabel="Watch Video"
      className="fixed inset-0 flex items-center justify-center z-50"
      overlayClassName="fixed inset-0 bg-black bg-opacity-75 z-40"
    >
      <div className="bg-white rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-1/2 max-h-full overflow-y-auto">
        <div className="flex justify-end p-4">
          <button
            onClick={onRequestClose}
            className="text-gray-500 hover:text-gray-800"
          >
            &times;
          </button>
        </div>
        <div className="p-6">
          <iframe
            width="100%"
            height="400"
            src={videoUrl}
            style={{ border: '0' }}
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowFullScreen
            title="Video"
          ></iframe>
        </div>
      </div>
    </Modal>
  );
};

export default VideoModal;