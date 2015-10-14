<?php

	interface Database_Interface{
		public function connectDB();
		public function disconnectDB();
	}