<?php
//
// ZoneMinder (A)ctive (R)response (C)amera empty event video view PHP
// file, $Date:
// 2013-08-30 19:52:12 +0000 (Fri, 30 Aug 2013) $, $Revision: 1 $
// Copyright (C) 2013 Anthony Cassandra
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
//

xhtmlHeaders(__FILE__, $SLANG['ARCConsole'] );

?>
<body>
  <div class="arc-event-video-empty"><?= $SLANG['EventVideoArea'] ?>
    <div class="arc-event-video-msg"><?= $SLANG['NoRecentCriticalEvents'] ?></div>
  </div>
</body>
