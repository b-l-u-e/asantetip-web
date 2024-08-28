import React from "react";
import PropTypes from "prop-types";

const VideoPlayer = ({ videoUrl }) => {
  return (
    <video
      className="absolute top-0 left-0 w-full h-full object-cover"
      src={videoUrl}
      autoPlay
      muted
      loop
    />
  );
};

VideoPlayer.propTypes = {
  videoUrl: PropTypes.string.isRequired,
};

export default VideoPlayer;
