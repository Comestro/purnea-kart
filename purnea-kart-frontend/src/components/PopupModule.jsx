import React, {Children, useRef } from 'react';
import Container from './container/container';
import Login from './Login';

const PopupModal = ({ isOpen, onClose}) => {
  const popupRef = useRef(null);

  // Close the popup when Escape key is pressed
//   useEffect(() => {
//     const handleEscape = (event) => {
//       if (event.key === 'Escape') onClose();
//     };
//     document.addEventListener('keydown', handleEscape);
//     return () => document.removeEventListener('keydown', handleEscape);
//   }, [onClose]);

  // Close the popup when cursor leaves the popup area
  const handleMouseLeave = (event) => {
    if (popupRef.current && !popupRef.current.contains(event.relatedTarget)) {
      onClose();
    }
  };

  if (!isOpen) return null; // Render nothing if modal is closed

  return (
    <div
      className="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50"
    >
      <div
        ref={popupRef}
        onMouseLeave={handleMouseLeave}
        className="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full relative"
      >
        {/* <h2 className="text-2xl font-semibold mb-4">{title}</h2>
        <p className="text-gray-700 mb-6">{content}</p>
        <button
          onClick={onClose}
          className="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 focus:ring-4 focus:ring-red-300"
        >
          Close
        </button> */}
      </div>
    </div>
  );
};

export default PopupModal;
