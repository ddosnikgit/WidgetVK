<?php

/*
 * PocketMine Standard PHP Library
 * Copyright (C) 2014-2018 PocketMine Team <https://github.com/PocketMine/PocketMine-SPL>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
*/

declare(strict_types=1);

interface BufferedLogger extends Logger{
	/**
	 * Buffers log messages while the closure is executed, and then flushes the buffer.
	 * This is typically used to log blocks of messages on concurrent loggers.
	 * @phpstan-param \Closure() : void $buffered
	 */
	public function buffer(\Closure $buffered) : void;
}